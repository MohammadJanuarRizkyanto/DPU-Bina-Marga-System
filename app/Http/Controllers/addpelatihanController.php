<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addpelatihanController extends Controller
{
    public function index()
    {
        return view('pelatihan.addpelatihan');
    }
}
