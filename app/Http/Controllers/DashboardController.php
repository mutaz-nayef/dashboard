<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        view()->share('menus', Menu::whereNull('parent_id')->with('children')->get());
        view()->share('menu', Menu::where('slug', 'dashboard')->with('children')->first());

        return view('pages.dashboards.index');
    }
}
