<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Donation;
use App\Models\Payment;



class ProfileController extends Controller
{


    public function index()
    {
        $users=User::all();
        return view ('dashboard/users/index', compact('users'));
    }

    /**
     *
     * Display the user's profile form.
     */

    public function edit(Request $request): View
    {
        $id = Auth::id();
        $donations = Donation::where('user_id', $id)->get();
        $payments = Payment::where('user_id', $id)->get();

        return view('profile.edit', [
            'user' => $request->user(),
            'donations'=>$donations,
            'payments'=>$payments,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }



public function destroy($id = null): RedirectResponse
{
    if ($id === null) {
        // User is trying to delete their own account
        $request = request();

        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('success', 'Your account has been deleted successfully.');
    } else {
        // Admin or other authorized user is trying to delete another user's account
        User::destroy($id);
        return back()->with('success', 'User deleted successfully.');
    }
}


}
