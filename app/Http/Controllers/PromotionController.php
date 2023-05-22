<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        return view('KhuyenMai.index');
    }

    public function show(string $slug)
    {
        $promotion = Promotion::where('slug', $slug)->first();
        return view('KhuyenMai.show', [
            'promotion' => $promotion
        ]);
    }
}
