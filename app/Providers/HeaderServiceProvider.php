<?php

namespace App\Providers;

use App\Models\Accommodation;
use App\Models\Explore;
use App\Models\Promotion;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $slices = Storage::allFiles('public/slide-home');
    // replace public to storage
        $slices = str_replace('public/', '', $slices);
        view()->share('headerDataShared', array(
            'slices' => $slices,
            'accommodations' => Accommodation::all(),
            'services' => Service::all(),
            'promotions' => Promotion::all(),
            'explores' => Explore::all(),
        ));
    }
}
