<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $pageTitle='Home';
        return view('dashboard.dashboard',compact('pageTitle'));
    }
}
