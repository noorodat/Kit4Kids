<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {

        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {

        session(['UserId' => $request->UserId]);
        session(['kit' => $request->kit]);
        session(['UserPhone' => $request->phone]);
        session(['UserAdress' => $request->adress]);
        session(['UserMessage' => $request->message]);

        try {

            $response = $this->gateway->purchase(
                array(
                    'amount' => $request->amount,
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('success'),
                    'cancelUrl' => url('error')
                )
            )->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                session()->forget('UserId');
                session()->forget('kit');
                session()->forget('UserPhone');
                session()->forget('UserAdress');
                session()->forget('UserMessage');

                // return $response->getMessage();
                return redirect()->route('go-donate', ['kit' => session('kitID')])->with('error', $response->getMessage());

            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(
                array(
                    'payer_id' => $request->input('PayerID'),
                    'transactionReference' => $request->input('paymentId'),

                )
            );

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();
                $payment->donater_id = session('UserId');
                $payment->donater_kit = session('kit');
                $payment->donater_phone = session('UserPhone');
                $payment->donater_address = session('UserAdress');
                $payment->donater_message = session('UserMessage');
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');


                $payment->save();


                session()->forget('UserId');
                session()->forget('kit');
                session()->forget('UserPhone');
                session()->forget('UserAdress');
                session()->forget('UserMessage');

                // return redirect()->route('go-donate')->with('success', 'Payment is Successful.');
                return redirect()->route('go-donate', ['kit' => session('kitID')])->with('success', 'Payment is Successful.');


            } else {
                // return $response->getMessage();
                return redirect()->route('go-donate')->with('error', $response->getMessage());

            }
        } else {
            // return 'Payment is declined !!';
            return redirect()->route('go-donate', ['kit' => session('kitID')])->with('error', 'Payment is declined !!');

        }
    }

    public function error()
    {
        // return 'User declined the payment !!';
        return redirect()->route('go-donate', ['kit' => session('kitID')])->with('error', 'User declined the payment !!');

    }
}