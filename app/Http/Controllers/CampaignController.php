<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\PendingCampaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::paginate(5);
        // Return a view with the campaigns data
        return view('pages.events.events', ['campaigns' => $campaigns]);
        // return view ('dashboard\campaign\index');
    }

    public function indexcampaign()
    {
        // $campaigns= Campaign::select('*');
        // return view ('dashboard\campaign\index', compact('campaigns'));
        $campaigns=Campaign::all();
        return view ('dashboard.campaign.index', compact('campaigns'));
    }

    public function showSingleCampaign(Campaign $campaign)
    {
        // The $campaign parameter will already contain the Campaign object
        // No need to search again by ID
        $moreCampaigns = Campaign::where('id', '!=', $campaign->id)->inRandomOrder()->limit(3)->get();
        // Return a view with the campaign data
        return view('pages.events.event-single.event-single', ['campaign' => $campaign, 'moreCampaigns' => $moreCampaigns]);
    }

    public function sendCampaignToAdmin(Request $request) {

    }

    /**
     * Summary of deleteOnCountDown
     * @param \App\Models\Campaign $campaign
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function delete(Campaign $campaign)
    {
        try {
            // Delete the campaign
            $campaign->delete();

            // Return a success response
            return response()->json(['message' => 'Event deleted successfully']);
        } catch (\Exception $e) {
            // Return an error response in case of an exception
            return response()->json(['error' => 'Error deleting event'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.campaign.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campaign = new Campaign();

        $campaign->title = $request->input('title');
        $campaign->description = $request->input('description');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageData = file_get_contents($image); // Read the binary image data
            $campaign->image = $imageData;
        } else {
            $campaign->image = null;
        }
        $campaign->target_money = $request->input('target_money');
        $campaign->raised_money = 0;
        $campaign->start_date = date('Y-m-d');
        $campaign->end_date = $request->input('end_date');
        $campaign->active = 1;


        $campaign->save();

        return redirect()->route('gocampaigns')->with('success', 'Campaign created successfully');
    }

    public function goDonate(Campaign $campaign)
    {
        session(['donationType' => 'campaign']);
        session(['campaign' => $campaign]);
        return view('pages.donate.donate', ['campaign' => $campaign]);
    }

    // Send pending campaign function
    public function sendPendingCampaign(Request $request)
    {

        $campaign = new PendingCampaign();
        // Get the currently authenticated user's ID
        $userId = Auth::id();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageData = file_get_contents($image); // Read the binary image data
            $campaign->image = $imageData;
        } else {
            $campaign->image = null;
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


    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign ,$id)
    {
        $campaigns = Campaign::findOrFail($id);

        return view('dashboard.campaigns.edit', compact('campaigns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign ,$id)
    {
        $campaigns = Campaign::findOrFail($id);

        $campaigns->title = $request->input('title');
        $campaigns->description = $request->input('description');
        $campaigns->type = $request->input('type');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $campaigns->image = $imageName;
            $campaigns->save();

        }

        $campaigns->save();

        return redirect()->route('campaigns.index')->with('success', 'Campaign updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign ,$id)
    {
        Campaign::destroy($id);
        return back()->with('success', ' deleted successfully.');
    }
}
