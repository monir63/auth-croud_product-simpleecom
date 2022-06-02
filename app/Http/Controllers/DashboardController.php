<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function adminlogin(){
        return view('master');
    }

    function adminregister(){
        return view('master');
    }
}
