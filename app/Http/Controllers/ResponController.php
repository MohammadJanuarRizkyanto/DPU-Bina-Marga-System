<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respons;

class ResponController extends Controller
{
    public function index(Request $request)
{
    $query = Respons::query();

    // Pencarian
    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where(function($query) use ($search) {
            $query->where('test_id', 'like', "%{$search}%")
                  ->orWhere('rating1', 'like', "%{$search}%")
                  ->orWhere('rating2', 'like', "%{$search}%")
                  ->orWhere('rating3', 'like', "%{$search}%")
                  ->orWhere('rating4', 'like', "%{$search}%")
                  ->orWhere('rating5', 'like', "%{$search}%");
        });
    }

    // Pengurutan
    if ($request->has('sort_by') && $request->has('order')) {
        $sortBy = $request->input('sort_by');
        $order = $request->input('order');
        $query->orderBy($sortBy, $order);
    } else {
        $query->orderBy('id', 'desc'); // Default order
    }

    // Pagination
    $respons = $query->paginate(10);

    // Kalkulasi Jumlah per Skala berdasarkan hasil pencarian
    $scaleCounts = [];
    for ($i = 1; $i <= 5; $i++) {
        $scaleCounts[$i] = [
            'rating1' => $query->clone()->where('rating1', $i)->count(),
            'rating2' => $query->clone()->where('rating2', $i)->count(),
            'rating3' => $query->clone()->where('rating3', $i)->count(),
            'rating4' => $query->clone()->where('rating4', $i)->count(),
            'rating5' => $query->clone()->where('rating5', $i)->count(),
        ];
    }

    return view('respon.index', compact('respons', 'scaleCounts'));
}
}
