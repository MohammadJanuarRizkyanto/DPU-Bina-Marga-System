<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelatihan; // Pastikan model pelatihan diimport
use App\Models\Materi;
use App\Models\Test;
use Illuminate\Support\Facades\Validator;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle='Daftar Pelatihan';
        $pelatihan = Pelatihan::all();
        if ($pelatihan->isEmpty()) {
            return redirect()->route('pelatihan.index')->with('error', 'No training found.');
        }
        return view('pelatihan.index', compact('pelatihan','pageTitle'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Pelatihan';
        $pelatihan = Pelatihan::all();
        $materi = Materi::all();
        return view('pelatihan.create', compact('pageTitle','materi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $messages = [
        'required' => ':attribute harus diisi.',
    ];

    $validator = Validator::make($request->all(), [
        //'pelatihan_id' => 'required|exists:pelatihan,id', // Pastikan pelatihan_id valid
        'judul_materi' => 'required',
        'question1' => 'required',
        'question2' => 'required',
        'question3' => 'required',
        'question4' => 'required',
        'question5' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    Pelatihan::create([
        'id_materi' => $request->id_materi,
        'judul_training' => $request->judul_training,
        'tanggal_training' => $request->tanggal_training,
        'jenis_training' => $request->jenis_training,
        'tempat_training' => $request->tempat_training,
        'pelaksanaan_training' => $request->pelaksanaan_training,
    ]);

    Test::create([
        'pelatihan_id' => $request->pelatihan_id, // Save the selected pelatihan ID
        'Jenis' => $request->judul_materi,
        'pertanyaan1' => $request->question1,
        'pertanyaan2' => $request->question2,
        'pertanyaan3' => $request->question3,
        'pertanyaan4' => $request->question4,
        'pertanyaan5' => $request->question5,
    ]);

    return redirect()->route('showtest')->with('success', 'Test created successfully.');
}




    /**
     * Display the specified resource.
     */

     public function show(string $id)
     {
         $pageTitle = 'Pelatihan Detail';
     
         // Fetch the pelatihan by ID
         $pelatihan = Pelatihan::find($id);
         $test = Test::where('pelatihan_id', $id)->get();
     
         if (!$pelatihan) {
             return redirect()->route('pelatihan.index')->with('error', 'Pelatihan not found.');
         }
     
         // Fetch the related materi and tests
         $materi = Materi::where('pelatihan_id', $id)->get();
         $tests = Test::where('pelatihan_id', $id)->get();
     
         return view('pelatihan.show', compact('pageTitle', 'pelatihan', 'materi', 'tests'));
     }
     
     

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Data Pelatihan';
        $pelatihan = Pelatihan::findOrFail($id);
        $materi = Materi::all();

        return view('pelatihan.edit', compact('pageTitle', 'pelatihan', 'materi'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'date' => ':Attribute harus berupa tanggal yang valid.'
        ];

        $validator = Validator::make($request->all(), [
            'id_materi' => 'required|exists:materi,id',
            'judul_training' => 'required',
            'tanggal_training' => 'required|date',
            'jenis_training' => 'required',
            'tempat_training' => 'required',
            'pelaksanaan_training' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pelatihan = Pelatihan::findOrFail($id);
        $pelatihan->update($request->all());

        return redirect()->route('pelatihan.index')->with('success', 'Pelatihan updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        $pelatihan->delete();

        return redirect()->route('pelatihan.index')->with('success', 'Pelatihan deleted successfully.');
    }

    public function generateSertifikat($pelatihan_id, $peserta_id)
    {
        // Fetch the pelatihan and peserta based on IDs
        $pelatihan = Pelatihan::findOrFail($pelatihan_id);
        $peserta = Peserta::findOrFail($peserta_id);

        // Load the certificate view and pass data
        $pdf = PDF::loadView('sertifikat.template', compact('pelatihan', 'peserta'));

        // Generate and download the PDF
        return $pdf->download('sertifikat_' . $peserta->nama . '.pdf');
    }
}
