<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $files = Storage::allFiles('public/slide-home');
        $files = str_replace('public', '', $files);
        return view('Dashboard.index', [
            'files' => $files
        ]);
    }

    public function uploadImageHome(Request $request)
    {
        if ($request->hasFile('images')) {
            Storage::deleteDirectory('public/slide-home');
            foreach ($request->file('images') as $file) {
                $file->store('slide-home', 'public');
            }
        }
        return redirect()->route('dashboard.dashboard.index');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard.dashboard.index');
        }
        return view('Dashboard.Auth.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.dashboard.index');
        }
        return redirect()->route('dashboard.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard.login');
    }
}
