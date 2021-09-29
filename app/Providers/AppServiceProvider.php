<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//below Paginator use Tailwind
//use Nette\Utils\Paginator;
//below Paginator use bootstrap
use Illuminate\Pagination\Paginator;
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
        //
        Paginator::useBootstrap();
    }
}
