<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\category;


class HomeController extends Controller
{
    public function index()
    {
       $catagories=category::all();
       $kits=Kit::all();
       return view('pages.index',compact('catagories'));
    }

        /* ---------This function shows the kits in the kits page (in show 9 with pagination)--------- */
        public function showAll($cat_id)
        {
            // Get kits for the specified category
            $kits = Kit::where('category_id', $cat_id)->paginate(9);
            // Return a view with the kits data
            return view('pages.causes.causes', ['kits' => $kits]);
        }
    
        /* ---------This function shows a single kit--------- */
        public function showSingleKit($kit_id)
        {
            // Retrieve the single kit based on kit_id
            $singleKit = Kit::where('id', $kit_id)->first();
    
            if ($singleKit) {
                // If a kit is found, return a view with the kit data
                return view('pages.causes.cause-single.cause-single', ['kit' => $singleKit]);
            }
        }








}
