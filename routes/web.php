<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [WebsiteController::class, 'getWebsites']);

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/admin/setWebsite', [WebsiteController::class, 'setWebsite'])->name('setWebsite');
Route::post('/admin/setUser', [UserController::class, 'setUser'])->name('setUser');
Route::post('/admin/setSubscription', [SubscriptionController::class, 'setSubscription'])->name('setSubscription');
Route::post('/admin/setPost', [PostController::class, 'setPost'])->name('setPost');

