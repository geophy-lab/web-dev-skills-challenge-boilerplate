<?php

namespace App\Providers;

use App\Http\View\Composers\MapboxCssComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider {
    public function boot(): void {
        View::composer('mapbox-css', MapboxCssComposer::class);
    }
}