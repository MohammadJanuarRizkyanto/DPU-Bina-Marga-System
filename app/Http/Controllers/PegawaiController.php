<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai; // Pastikan model Pegawai diimport
use App\Models\Absensi;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle='Daftar Pegawai';
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact ('pegawai','pageTitle'));
    }
    
    public function getAbsensi(Request $request){
        $pageTitle = 'Daftar Absensi';
        $query = Absensi::with('pegawai', 'training.materi');
        
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $search = $request->input('search'); // Dapatkan input pencarian
    
        if ($start_date && $end_date) {
            $query->whereBetween('tanggal', [$start_date, $end_date]);
        }
    
        if ($search) {
            $query->whereHas('pegawai', function ($q) use ($search) {
                $q->where('nama_pegawai', 'like', '%' . $search . '%')
                  ->orWhere('nip_pegawai', 'like', '%' . $search . '%');
            });
        }
    
        $absensi = $query->get();
        
        return view('pegawai.absensi', compact('pageTitle', 'absensi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Pegawai';
        return view('pegawai.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'nip_pegawai' => 'required|numeric',
        'nama_pegawai' => 'required',
        'jabatan_pegawai' => 'required',
        'unit_kerja' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Debugging lines
    \Log::info('Validated Data:', $request->all());

    Pegawai::create($request->all());

    return redirect()->route('pegawai.index')
                     ->with('success', 'Pegawai created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Data Pegawai';
        $pegawai = Pegawai::findOrFail($id); // Use findOrFail for proper error handling

        return view('pegawai.edit', compact('pageTitle', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
    
        $validator = Validator::make($request->all(), [
            'nip_pegawai' => 'required|numeric',
            'nama_pegawai' => 'required',
            'jabatan_pegawai' => 'required',
            'unit_kerja' => 'required',
        ], $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
    
        return redirect()->route('pegawai.index')
                         ->with('success', 'Pegawai updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')
                         ->with('success', 'Pegawai deleted successfully.');

    }
}
