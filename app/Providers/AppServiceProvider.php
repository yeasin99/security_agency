<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Guard;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider


{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        Paginator::useBootstrap();

        $cats=Category::all();
        $guard=Guard::all();

        View::share('categories', $cats);
        View::share('guard', $guard);
    }
}
