<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthLogout;
use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\PrivacyPolicy;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MemberController;

Route::get('post',[PostController::class,'index']);

Route::post('post',[PostController::class,'store'])
->name('post.store');

Route::get('post/create',[PostController::class,'create']);

Route::get('/home', [TestController::class, 'home'])
->name('home')->middleware('auth');

Route::get('/logout', [AuthLogout::class, 'logout'])
->name('logout');
Route::get('/privacypolicy', [PrivacyPolicy::class, 'privacypolicy'])
->name('privacypolicy');

Route::get('/about', [AboutController::class, 'about'])
->name('privacypolicy');

Route::get('/member', [MemberController::class, 'member'])
->name('member');
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
