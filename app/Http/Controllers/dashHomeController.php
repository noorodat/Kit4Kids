<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Donation;
use App\Models\Kit;

class dashHomeController extends Controller


{

    public function Index(){

        $kits=Kit::all();
        $users=User::all();
        $admins=Admin::all();
        $donations=Donation::all();



        return view('dashboard.welcome-dashboard', compact('kits', 'users', 'admins', 'donations'));
    }
    

    
public function adminIndex(){
    return view('dashboard.dashlog.home');
}
}
