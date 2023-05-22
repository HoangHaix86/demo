<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPromotionController extends Controller
{

    public function index()
    {
        return view('Dashboard.Promotion.index', [
            'promotions' => Promotion::all(),
        ]);
    }


    public function create()
    {
        return view('Dashboard.Promotion.create');
    }


    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $path = $request->file('thumbnail')->store('images', 'public');

            Promotion::query()->create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'thumbnail' => $path,
                'content' => $request->content,
            ]);

            DB::commit();

            return redirect()->route('dashboard.promotions.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('dashboard.promotions.index');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $item = Promotion::query()->findOrFail($id);
        return view('Dashboard.Promotion.edit', [
            'promotion' => $item,
        ]);
    }


    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $promotion = Promotion::query()->findOrFail($id);

            // remove old image
            if ($request->thumbnail) {
                if (Storage::exists('public/' . $promotion->thumbnail)) {
                    Storage::delete('public/' . $promotion->thumbnail);
                }
            }

            // upload new image
            if ($request->hasFile('thumbnail')) {
                $path = $request->file('thumbnail')->store('images', 'public');
                $promotion->update([
                    'thumbnail' => $path,
                ]);
            }

            $promotion->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
            ]);
            DB::commit();
            return redirect()->route('dashboard.promotions.index');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('dashboard.promotions.index');
        }
    }


    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $promotion = Promotion::query()->findOrFail($id)->first();
            // remove old image
            if ($promotion->thumbnail) {
                if (Storage::exists('public/' . $promotion->thumbnail)) {
                    Storage::delete('public/' . $promotion->thumbnail);
                }
            }
            $promotion->delete();

            DB::commit();
            return redirect()->route('dashboard.promotions.index');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('dashboard.promotions.index');
        }
    }
}
