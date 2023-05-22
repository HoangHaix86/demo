<?php

namespace App\Http\Controllers;

use App\Models\Explore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardExploreController extends Controller
{

    public function index()
    {
        $explores = Explore::all();
        return view('Dashboard.Explore.index', [
            'explores' => $explores
        ]);
    }

    public function create()
    {
        return view('Dashboard.Explore.create');
    }


    public function store(Request $request)
    {
        // upload thumbnail
        $path = null;
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('images', 'public');
        }

        $pattern = '(temp\/[^"]+)';
        $content = $request->content;
        preg_match_all($pattern, $content, $matches);

        // move images from temp to images
        $arr_images = [];
        foreach ($matches[0] as $match) {
            $newPath = str_replace('temp', 'images', $match);
            array_push($arr_images, $newPath);
            Storage::move('public/' . $match, 'public/' . $newPath);
        }

        // replace temp to images
        $content = str_replace('/temp/', '/images/', $content);

        Explore::query()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'thumbnail' => $path,
            'content' => $content,
            'images' => json_encode($arr_images)
        ]);

        return redirect()->route('dashboard.explores.index');
    }



    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $explore = Explore::query()->findOrFail($id);
        $explore->images = json_decode($explore->images);
        return view('Dashboard.Explore.edit', [
            'explore' => $explore
        ]);
    }
    public function update(Request $request, $id)
    {
        $explore = Explore::query()->findOrFail($id);

        // regex to get all images from content
        $pattern = '(temp\/[^"]+)';
        $content = $request->content;
        preg_match_all($pattern, $content, $matches);

        // delete old images
        $images = json_decode($explore->images);
        if ($images) {
            foreach ($images as $image) {
                if (Storage::exists('public/' . $image)) {
                    Storage::delete('public/' . $image);
                }
            }
        }

        // new images
        $arr_images = [];
        foreach ($matches[0] as $match) {
            $newPath = str_replace('temp', 'images', $match);
            array_push($arr_images, $newPath);
            Storage::move('public/' . $match, 'public/' . $newPath);
        }

        // replace temp to images
        $content = str_replace('/temp/', '/images/', $content);

        $explore->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $content,
            'images' => json_encode($arr_images),
        ]);

        if ($request->hasFile('thumbnail')) {
            Storage::delete('public/' . $explore->thumbnail);
            $path = $request->file('thumbnail')->store('images', 'public');
            $explore->update([
                'thumbnail' => $path,
            ]);
        }

        return redirect()->route('dashboard.explores.index');
    }

    public function destroy($id)
    {
        $explore = Explore::query()->findOrFail($id)->first();

        // delete thumbnail
        if ($explore->thumbnail) {
            if (Storage::exists('public/' . $explore->thumbnail)) {
                Storage::delete('public/' . $explore->thumbnail);
            }
        }

        // delete images
        $images = json_decode($explore->images);
        if ($images) {
            foreach ($images as $image) {
                if (Storage::exists('public/' . $image)) {
                    Storage::delete('public/' . $image);
                }
            }
        }

        $explore->delete();
        return redirect()->route('dashboard.explores.index');
    }
}
