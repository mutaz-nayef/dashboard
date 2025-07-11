<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\Blade;
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

        Blade::component('layout._default', 'default-layout');
        Blade::component('layout._auth', 'auth-layout');
        Blade::component('layout._system', 'system-layout');

        View::composer('/layout/partials/sidebar', function ($view) {
            $menus = Menu::with('children')->whereNull('parent_id')->get();
            // Group them by section (assuming your table has a 'section' column)
            $menusBySection = $menus->groupBy('section');

            $view->with('menusBySection', $menusBySection);
        });

        View::composer('/layout/partials/header', function ($view) {
            $menus = Menu::with('children')->whereNull('parent_id')->get();
            // Group them by section (assuming your table has a 'section' column)
            $menusBySection = $menus->groupBy('section');
            $view->with('menusBySection', $menusBySection);
        });
    }
}
