<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //am adaugat asta
       // Paginator::useBootstrapFive();  //cu asta se vede un text informativ in stinga  Showing 1 to 10 of 57 results
       Paginator::useBootstrap();
    }
}
