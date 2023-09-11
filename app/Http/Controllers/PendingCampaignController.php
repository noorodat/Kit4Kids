<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendingCampaign;
use Illuminate\Support\Facades\Auth;

class PendingCampaignController extends Controller
{

    public function index()
    {
        
        $pendingcampaigns=PendingCampaign::all();
        return view ('dashboard/pindingcampaign/index', compact('pendingcampaigns'));
    }
        // Send pending campaign function
        public function sendPendingCampaign(Request $request)
        {

            $campaign = new PendingCampaign();
            // Get the currently authenticated user's ID
            $userId = Auth::id();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
                $campaign->image = $imageName;
            }

            $campaign->title = $request->input('subject');
            $campaign->fullName = $request->input('name');
            $campaign->email = $request->input('email');
            $campaign->phone = $request->input('phone');
            $campaign->target_money	= $request->input('targetMoney');
            $campaign->description	= $request->input('note');
            $campaign->user_id	= $userId;

            $campaign->save();

            // Redirect to the "go-home" route with a success message
            return redirect()->route('go-home')->with('success', 'Campaign saved successfully.');
        }

        public function destroy($id)
        {
    
            PendingCampaign::destroy($id);
        return back()->with('success', 'Admin deleted successfully.');
        }
}
