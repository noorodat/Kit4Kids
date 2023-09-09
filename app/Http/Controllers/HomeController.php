<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\category;
use App\Models\Campaign;
use App\Models\Partner;


class HomeController extends Controller
{
    public function index()
    {
       $catagories=category::all();
       $kits=Kit::all();
       $Campaigns=Campaign::all();
       $Partners=Partner::all();
       return view('pages.index',compact('catagories', 'kits', 'Campaigns', 'Partners'));
    }









}
