<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashHomeController extends Controller
{
public function adminIndex(){
    return view('dashboard.dashlog.home');
}
}
