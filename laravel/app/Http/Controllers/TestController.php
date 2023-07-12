<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class TestController extends Controller
{
    //
    public function home() {
        $users = User::all();
        return view('home',compact('users'));
    }
}
