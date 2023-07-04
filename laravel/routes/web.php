<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthLogout;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\PrivacyPolicy;

Route::get('/home', [TestController::class, 'home'])
->name('home')->middleware('auth');

Route::get('/logout', [AuthLogout::class, 'logout'])
->name('logout');
Route::get('/privacypolicy', [PrivacyPolicy::class, 'privacypolicy'])
->name('privacypolicy');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
