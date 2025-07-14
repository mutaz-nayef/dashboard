<?php

namespace App\Http\Controllers;

use App\Models\Menu;

abstract class Controller
{
    public function __construct()
    {
        view()->share('menus', Menu::whereNull('parent_id')->with('children')->get());
        view()->share('menu', Menu::where('slug', 'dashboard')->with('children')->first());
    }
}
