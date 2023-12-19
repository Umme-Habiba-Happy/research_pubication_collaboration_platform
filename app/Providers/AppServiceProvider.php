<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
    public function boot():void
    {
        Paginator::useBootstrap();
        if(Schema::hasTable('categories'))
        {
            $categories =category::all();
            View::share('cat', $categories);
        }  
        if(Schema::hasTable('posts'))
        {
            $projects =Post::all();
            View::share('projects', $projects);
        }       
    }
}
