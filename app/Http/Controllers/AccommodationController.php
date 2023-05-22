<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;

class AccommodationController extends Controller
{
    public function index()
    {
        return view('LoaiPhong.index');
    }

    public function show(string $slug)
    {
        $accommodation = Accommodation::where('slug', $slug)->first();

        return view('LoaiPhong.show', [
            'accommodation' => $accommodation
        ]);
    }
}
