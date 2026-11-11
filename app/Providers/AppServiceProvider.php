<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
        Schema::defaultStringLength(191);

        // A aplicação usa Bootstrap 5; sem isso o links() sai com markup Tailwind
        Paginator::useBootstrapFive();
=======
        //
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
    }
}
