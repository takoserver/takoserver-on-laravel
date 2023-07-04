<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicy extends Controller
{
    public function privacyPolicy() {
        return view('privacypolicy');
    }
}
