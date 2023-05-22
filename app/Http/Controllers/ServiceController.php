<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{

    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        $service->images = json_decode($service->images);
        return view('DichVu.show', [
            'service' => $service
        ]);
    }
}
