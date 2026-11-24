<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('login');
        }
        return view('admin.dashboard');
    }
}
