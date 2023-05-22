<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('Dashboard.Service.index', [
            'services' => $services
        ]);
    }


    public function create()
    {
        return view('Dashboard.Service.create');
    }


    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $paths = [];
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                array_slice($images, 0, 10);
                foreach ($images as $file) {
                    $path = $file->store('images', 'public');
                    array_push($paths, $path);
                }
            }

            Service::query()->create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'images' => json_encode($paths),
            ]);
            DB::commit();

            return redirect()->route('dashboard.services.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('dashboard.services.index');
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {   
        $item = Service::findOrFail($id);
        $item->images = json_decode($item->images);
        return view('Dashboard.Service.edit', [
            'service' => $item
        ]);
    }


    public function update(Request $request, $id)
    {
        $item = Service::findOrFail($id);

        $paths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('images', 'public');
                array_push($paths, $path);
            }
        }

        if ($paths) {
            $item->update([
                'images' => json_encode($paths),
            ]);
        }

        $item->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard.services.index');
    }


    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $item = Service::query()->findOrFail($id)->first();
            // remove old image
            if ($item->images) {
                foreach (json_decode($item->images) as $image) {
                    if (Storage::exists('public/' . $image)) {
                        Storage::delete('public/' . $image);
                    }
                }
            }
            $item->delete();

            DB::commit();
            return redirect()->route('dashboard.services.index');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('dashboard.services.index');
        }
    }
}
