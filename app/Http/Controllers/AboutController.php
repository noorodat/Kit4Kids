<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\category;
use App\Models\Campaign;
use App\Models\Partner;

class AboutController extends Controller
{
    public function index()
    {
       $catagories=category::all();
       $kits = Kit::inRandomOrder()
       ->limit(6)
       ->get();
       $campaigns = Campaign::inRandomOrder()->limit(4)->get();
       $Partners=Partner::all();
       return view('pages.about.about',compact('catagories', 'kits', 'campaigns', 'Partners'));
    }
}
