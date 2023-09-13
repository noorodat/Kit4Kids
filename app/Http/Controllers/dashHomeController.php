<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Donation;
use App\Models\Kit;

class dashHomeController extends Controller


{
<<<<<<< HEAD
public function adminIndex() {
=======

    public function Index(){

        $kits=Kit::all();
        $users=User::all();
        $admins=Admin::all();
        $donations=Donation::all();



        return view('dashboard.welcome-dashboard', compact('kits', 'users', 'admins', 'donations'));
    }



public function adminIndex(){
>>>>>>> a78205e8ee2d72319216adca71c97d91efb6d4a0
    return view('dashboard.dashlog.home');
}
}
