<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pegawai;

class registerController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
   
    {
        $request->validate([

            'name' => 'required|string|max:255', // Di isi dengan NIP Masing-masing
            'nama_pegawai' => 'required|string|max:255',
            'jabatan_pegawai' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|string|min:5'
        ]);

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);
        Pegawai::create([
            'nip_pegawai' => $request->name, // Name merupakan NIP
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan_pegawai' => $request->jabatan_pegawai,
            'unit_kerja' => $request->unit
        ]);


        return to_route('login');
    }

}
