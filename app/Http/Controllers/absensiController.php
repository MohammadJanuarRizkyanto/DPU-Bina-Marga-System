<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Materi;
use App\Models\Test;
use App\Models\Pegawai;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class absensiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil ID Absensi terakhir dan tambahkan 1
        $lastAbsensi = Absensi::orderBy('id_absensi', 'desc')->first();
        $nextIdAbsensi = $lastAbsensi ? $lastAbsensi->id_absensi + 1 : 1;

        $idPelatihan = $request->input('id_pelatihan');
        $userId = Auth::user();
        $username = $userId->name;
       //$tests = $request->input('jumlah_tests');
        $tests = Test::where('pelatihan_id', $idPelatihan)->get();
        $jumlahStatusBenar = $request->input('jumlah_status_benar');

        // Kirim data ke view
        return view('absensi.absensi', [
            'id_pelatihan' => $idPelatihan,
            'nip_pegawai' => $username,
            'jumlah_test' => $tests->count(),
            'jumlah_status_benar' => $jumlahStatusBenar,
            'next_id_absensi' => $nextIdAbsensi,
            'tests' => $tests, // Pass tests to the view
        ]);
    }

    public function dataAbsensi(){
        $pageTitle = "Halaman Absensi";
        $absensi = Absensi::with('pegawai','training.materi')->get();
        return view('absensi.halaman', compact('pageTitle', 'absensi'));
    }

    public function create(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
        ];
        $validator = Validator::make($request->all(), [
            'id_absensi' => 'required|integer',
            'id_training' => 'required|exists:pelatihan,id',
            'nip_pegawai' => 'required|string',
            'tanggal' => 'required|date',
            'StatusTest_Done' => 'required|integer',
            'jumlah_test' => 'required|integer',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Fetch all id_test related to the given pelatihan_id
        $tests = Test::where('pelatihan_id', $request->id_training)->get();

        foreach ($tests as $test) {
            Absensi::create([
                'id_absensi' => $request->id_absensi,
                'id_training' => $request->id_training,
                'id_test' => $test->id, // Automatically use each id_test
                'nip_pegawai' => $request->nip_pegawai,
                'tanggal' => $request->tanggal,
                'StatusTest_Done' => $request->StatusTest_Done,
                'jumlah_test' => $request->jumlah_test,
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Absensi created successfully');
    }


    public function generateImage(Request $request){
        $name = $request->input('nama');
        $date = now()->format('d F Y');

        $img = Image::make(public_path('uploads/SERTIF.png'));

    }

}
