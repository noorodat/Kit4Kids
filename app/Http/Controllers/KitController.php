<?php

namespace App\Http\Controllers;

use App\Models\Kit;
use App\Models\Category;
use Illuminate\Http\Request;

class KitController extends Controller
{
    /* ---------This function shows the kits in the kits page (in show 9 with pagination)--------- */
    public function showAll($cat_id)
    {
        // Get kits for the specified category
        $kits = Kit::where('category_id', $cat_id)->paginate(9);
        // Return a view with the kits data
        return view('pages.causes.causes', ['kits' => $kits, 'cat_id' => $cat_id]);
    }

    /* ---------This function shows a single kit--------- */
    public function showSingleKit($cat_id, Kit $kit)
    {
        // No need to search again by ID
        // Get 3 random kits to show on the single kit page
        $moreKits = Kit::where('id', '!=', $kit->id)
            ->where('category_id', $cat_id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        // Return a view with the kit data
        return view('pages.causes.cause-single.cause-single', ['kit' => $kit, 'moreKits' => $moreKits, 'cat_id' => $cat_id]);
    }

    public function goDonate(Kit $kit)
    {
        session(['kitID' => $kit]);
        return view('pages.donate.donate', ['kit' => $kit]);
    }
}

