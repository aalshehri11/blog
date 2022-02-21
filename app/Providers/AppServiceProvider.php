<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;

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

        

        view()->composer('layouts.app',function ($view){
            $latestPosts = Post::latest()->take(4)->get();
            $view->with('latestPosts', $latestPosts);
           });
    }
}
