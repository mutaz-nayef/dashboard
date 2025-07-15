<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{


    public function edit()
    {
        return view('pages.account.account-settings');
    }
}
