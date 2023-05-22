<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccommodationRequest;
use App\Models\Accommodation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardAccommodationController extends Controller
{

    private $accommodation;

    public function __construct()
    {
        $this->accommodation = new Accommodation();
    }

    public function index()
    {
        $item = Accommodation::all();
        return view('Dashboard.Accommodation.index', [
            'accommodations' => $item
        ]);
    }


    public function create()
    {
        return view('Dashboard.Accommodation.create');
    }

    public function store(StoreAccommodationRequest $request)
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

            $this->accommodation->query()->create(
                array_merge(
                    $request->validated(),
                    [
                        'images' => $paths,
                        'slug' => Str::slug($request->title)
                    ]
                )
            );

            DB::commit();

            return redirect()->route('dashboard.accommodations.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('dashboard.accommodations.index');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $item = Accommodation::findOrFail($id);
        return view('Dashboard.Accommodation.edit', [
            'accommodation' => $item
        ]);
    }


    public function update(Request $request, $id)
    {
        $accommodation = Accommodation::findOrFail($id);

        $paths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('images', 'public');
                array_push($paths, $path);
            }
        }

        if ($paths) {
            $accommodation->update([
                'images' => json_encode($paths),
            ]);
        }

        $accommodation->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'room_number' => $request->room_number,
            'area' => $request->room_number,
            'bed_size' => $request->bed_size,
            'address' => $request->address,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard.accommodations.index');
    }


    public function destroy($id)
    {

        $item  = $this->accommodation->query()->findOrFail($id);
        dd($item);

        DB::beginTransaction();
        try {
            $promotion = Accommodation::query()->findOrFail($id)->first();
            // remove old image
            if ($promotion->images) {
                foreach (json_decode($promotion->images) as $image) {
                    if (Storage::exists('public/' . $image)) {
                        Storage::delete('public/' . $image);
                    }
                }
            }
            $promotion->delete();

            DB::commit();
            return redirect()->route('accommodations.index');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('accommodations.index');
        }
    }
}
