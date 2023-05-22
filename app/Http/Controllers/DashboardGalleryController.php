<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{

    public function index()
    {
        return view('Dashboard.Gallery.index', [
            'galleries' => Gallery::all()
        ]);
    }


    public function create()
    {
        return view('Dashboard.Gallery.create');
    }


    public function store(Request $request)
    {
        if ($request->file('images')) {
            $images = array_slice($request->file('images'), 0, 10);
            foreach ($images as $file) {
                $name = $file->hashName();
                // $path = Storage::disk('public')->put('gallery', $file);
                $path = $file->storeAs('gallery', $name, 'public');
                Gallery::query()->create([
                    'title' => pathinfo($name, PATHINFO_FILENAME),
                    'path' => $path,
                ]);
            }
        }
        return redirect()->route('dashboard.gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($gallery)
    {
        $gallery = Gallery::query()->findOrFail($gallery)->first();
        Storage::disk('public')->delete($gallery->path);
        $gallery->delete();
        return redirect()->route('dashboard.gallery.index');
    }
}