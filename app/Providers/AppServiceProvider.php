<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Category;
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
    public function boot()
    {
        Schema::defaultStringLength(191);
        if ( !app()->runningInConsole() ){
            $data['categories'] = Category::orderBy('id','asc')->get();
            $data['popular_categories'] = Category::orderBy('id','asc')->paginate(9);
            $data['new_arrivals'] = Product::with('category')->where('status', 1)->latest()->paginate(12);
            View::Share($data);
        }
    }
}
