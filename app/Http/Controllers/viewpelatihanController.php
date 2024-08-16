<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelatihan;
use App\Models\Test;
use App\Models\Materi;


class viewpelatihanController extends Controller
{
    public function index()
    {   $pageTitle='Daftar Pelatihan';
        return view('pelatihan.viewpelatihan',compact('pageTitle'));
    }

    public function show()
    {
        // Return the view with the pelatihan data
        return view('pelatihan.viewdetailpelatihan');
    }

    public function viewtest()
    {
        // Fetch data from the test_view
        $test = DB::table('test_view')->get();

        return view('pelatihan.viewdetailpelatihan', compact('test'));
    }
}
