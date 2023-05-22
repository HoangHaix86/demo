<?php

namespace App\Http\Controllers;

use App\Models\Explore;

class ExploreController extends Controller
{

    public function show(string $slug)
    {
        $item = Explore::where('slug', $slug)->first();
        $item->images = json_decode($item->images);
        return view('KhamPha.show', [
            'explore' => $item
        ]);
    }
}
