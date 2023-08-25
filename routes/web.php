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
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin');
});

Route::post('/admin/setPost', [PostController::class, 'setPost'])->name('setPost');

Route::post('/admin/insertAllData', [AdminController::class, 'insertAllData'])->name('insertAllData');
