<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\API\V1\Models\Order;
use App\User;
use App\API\V1\Models\Curiosity;
use App\API\V1\Models\Service;
use App\API\V1\Models\Project;
use App\API\V1\Models\Specialist;
use App\API\V1\Models\Video;
use App\API\V1\Models\Item;

class RouteBindingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('idUser', function ($value) {
            return User::findOrFail($value);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
