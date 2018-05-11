<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
			\Blade::directive('myDir', function ($var){
					return "<h1>New derictive $var</h1>";
		});
			DB::listen(function($querry){

					dump($querry->sql);
					dump($querry->bindings);

			});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
