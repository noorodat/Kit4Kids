<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

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

    public function index_campaign()
    {
        $campaigns= Campaign::select('*');
        // Return a view with the campaigns data
        return view ('dashboard\campaign\index', compact('campaigns'));
    }

    public function showSingleCampaign(Campaign $campaign)
    {
        // The $campaign parameter will already contain the Campaign object
        // No need to search again by ID
        $moreCampaigns = Campaign::where('id', '!=', $campaign->id)->inRandomOrder()->limit(3)->get();
        // Return a view with the campaign data
        return view('pages.events.event-single.event-single', ['campaign' => $campaign, 'moreCampaigns' => $moreCampaigns]);
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
