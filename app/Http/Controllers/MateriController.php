<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle='Daftar Materi';
        $materi = Materi::all();
        \Log::info('Materi Data:', $materi->toArray());
        return view('materi.index', compact('materi','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Materi';
        $materi = Materi::all();
        $pelatihan = Pelatihan::all(); // Mendapatkan semua data pelatihan
        // $pelatihan = Materi::select('pelatihan_id')->distinct()->get();
        return view('materi.create', compact('pageTitle','pelatihan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        \Log::info('Request Data:', $request->all());

        $request->validate([
            'pelatihan_id' => 'required',
            'judul_materi' => 'required|string|max:255',
            'nama_pemateri' => 'required|string|max:255',
            'jam' => 'required|date_format:H:i',
            'file' => 'required|file|mimes:pdf,doc,docx',
        ]);


            $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('materi_files', 'public');
            \Log::info('File Path: ' . $filePath);
        } \Log::info('File Path: ' . $filePath);
            
        // Debugging lines
        \Log::info('Validated Data:', $request->all());

        Materi::create([
            'pelatihan_id' => $request->pelatihan_id,
            'judul_materi' => $request->judul_materi,
            'nama_pemateri' => $request->nama_pemateri,
            'jam' => $request->jam,
            'file' => $filePath, // Use the file path variable
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan!');
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
        $pageTitle = 'Edit Materi';
        $materi = Materi::findOrFail($id); // Use findOrFail for proper error handling
        $pelatihan = Pelatihan::all(); // Mendapatkan semua data pelatihan

        return view('materi.edit', compact('pageTitle', 'materi', 'pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        \Log::info('Request Data:', $request->all());

        $request->validate([
            
            'pelatihan_id' => 'required',
            'judul_materi' => 'required|string|max:255',
            'nama_pemateri' => 'required|string|max:255',
            'jam' => 'required|date_format:H:i',
            'file' => 'required|file|mimes:pdf,doc,docx,zip',
        ]);
    
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('materi_files', 'public');
    
            // Tambahkan log untuk memastikan filePath benar
            \Log::info('File Path: ' . $filePath);
        }

        $materi = Materi::findOrFail($id);
        $materi->update([
            'pelatihan_id' => $request->pelatihan_id,
            'judul_materi' => $request->judul_materi,
            'nama_pemateri' => $request->nama_pemateri,
            'jam' => $request->jam,
            'file' => $filePath ?: $materi->file, // Use existing file path if no new file is uploaded
        ]);

        // \Log::info('Pelatihan ID:', ['pelatihan_id' => $request->pelatihan_id]);

        
        return redirect()->route('materi.index')
                         ->with('success', 'Materi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();

        return redirect()->route('materi.index')
                         ->with('success', 'materi deleted successfully.');
    }
}
