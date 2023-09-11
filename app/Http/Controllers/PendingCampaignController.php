<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendingCampaign;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use Illuminate\Support\Facades\DB;

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

        public function show($id)
    {
        
        return view ('dashboard/campaign/index', compact('pendingcampaigns'));

    }

    public function destroy($id)
    {

        PendingCampaign::destroy($id);
        return back()->with('success', 'pinding Campaign deleted successfully.');
    }

    public function store(Request $request) {
        // Retrieve the pending campaign ID from the form data
        $id = $request->input('pending_campaign_id');
    
        // Retrieve the pending campaign record by its ID
        $pendingCampaign = PendingCampaign::find($id);
    
        // Check if the pending campaign record exists
        if (!$pendingCampaign) {
            // Handle the case where the pending campaign record with the given ID does not exist
            return redirect()->route('go-home');
        }
    
        // Create a new Campaign record and populate it with data from the pending campaign
        $campaign = new Campaign();
        $campaign->image = $pendingCampaign->image;
        $campaign->title = $pendingCampaign->title;
        $campaign->description = $pendingCampaign->description;
        $campaign->target_money = $pendingCampaign->target_money;
        $campaign->raised_money = 0;
        $campaign->start_date = date('Y-m-d');
        $campaign->end_date = $request->end_date;
        $campaign->active = 1;
    
        // Save the new Campaign record
        $campaign->save();
    
        // Delete the corresponding record from the pending_campaigns table
        $pendingCampaign->delete();
    
        // Return a success response or redirect to a different page
        return redirect()->route('go-home');
    }
    
    
}
