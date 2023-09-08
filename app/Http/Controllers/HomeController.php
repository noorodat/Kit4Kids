<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;

class HomeController extends Controller
{
    public function index()
    {
       $kits=Kit::all();
       return view('pages.index',compact('kits'));
    }
}
