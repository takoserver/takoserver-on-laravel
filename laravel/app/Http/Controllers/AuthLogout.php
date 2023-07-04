<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthLogout extends Controller
{
    //
    public function logout() {
        return view('logout');
    }
}
