<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Profile;
use App\Category;
use App\Tag;
use App\Slider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
           View::share('profile', Profile::first());
           View::share('categories', Category::all());
           View::share('tags', Tag::all());
           View::share('slider', Slider::all());

    }
}
