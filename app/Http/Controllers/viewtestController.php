<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Respons;
use Validator;
use Illuminate\Support\Facades\DB;

class viewtestController extends Controller
{
    public function index()
    {
        $pageTitle = 'Daftar Test';
        $test = Test::all();
        return view('test.test', compact('test', 'pageTitle'));
    }

    public function create()
    {
        $pelatihan = DB::table('pelatihan')->get(); // Assuming your table is called 'pelatihans'
        $pageTitle = 'Create Test';
        return view('test.addtest', compact('pelatihan', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'pelatihan_id' => 'required',
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

        Test::create([
            'pelatihan_id' => $request->pelatihan_id,
            'Jenis' => $request->judul_materi,
            'pertanyaan1' => $request->question1,
            'pertanyaan2' => $request->question2,
            'pertanyaan3' => $request->question3,
            'pertanyaan4' => $request->question4,
            'pertanyaan5' => $request->question5,
        ]);

        return redirect()->route('showtest')->with('success', 'Test created successfully.');
    }

    public function edit($id)
    {
        $test = Test::findOrFail($id);
        return view('test.edit', compact('test'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
        ];

        $validator = Validator::make($request->all(), [
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

        $test = Test::findOrFail($id);
        $test->update([
            'Jenis' => $request->input('judul_materi'),
            'pertanyaan1' => $request->input('question1'),
            'pertanyaan2' => $request->input('question2'),
            'pertanyaan3' => $request->input('question3'),
            'pertanyaan4' => $request->input('question4'),
            'pertanyaan5' => $request->input('question5'),
        ]);

        return redirect()->route('showtest')->with('success', 'Test updated successfully.');
    }

    public function destroy($id)
    {
        $test = Test::findOrFail($id);
        $test->delete();

        return redirect()->route('showtest')->with('success', 'Test deleted successfully.');
    }

    public function show($id)
{
    $pageTitle = 'Daftar Test';
    $test = Test::find($id); // or Test::where('id', $id)->first();

    if (!$test) {
        return redirect()->route('showtest')->with('error', 'Test not found.');
    }

    return view('test.viewtest', compact('test', 'pageTitle'));
}

public function storerespons(Request $request, $testId)
{
    $validatedData = $request->validate([
        'rating1_'.$testId => 'required|integer|min:1|max:5',
        'rating2_'.$testId => 'required|integer|min:1|max:5',
        'rating3_'.$testId => 'required|integer|min:1|max:5',
        'rating4_'.$testId => 'required|integer|min:1|max:5',
        'rating5_'.$testId => 'required|integer|min:1|max:5',
    ]);

    Respons::create([
        'test_id' => $testId,
        'rating1' => $validatedData['rating1_'.$testId],
        'rating2' => $validatedData['rating2_'.$testId],
        'rating3' => $validatedData['rating3_'.$testId],
        'rating4' => $validatedData['rating4_'.$testId],
        'rating5' => $validatedData['rating5_'.$testId],
    ]);

    return redirect()->back()->with('success', 'Respon berhasil disimpan!');
}

}
