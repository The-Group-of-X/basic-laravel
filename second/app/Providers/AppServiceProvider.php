<?php

namespace App\Providers;

use App\Models\SeoRecord;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
            $routeName = Route::currentRouteName();

            if ($routeName) {
                $parts = explode('.', $routeName);
                $pageName = $parts[1] ?? null;

                if ($pageName) {
                    $pageseo = SeoRecord::where('page_name', $pageName)->first();
                    $view->with('pageseo', $pageseo);
                }
            }
        });
    }
}
