<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ PurchasesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/requester-dashboard', function () {
    return view('requester.dashboard');
})->name('requester-dashboard');

Route::get('/admin-dashboard', function () {
    return view('library-admin.dashboard');
})->name('admin-dashboard');

Route::get('/dean-dashboard', function () {
    return view('dean.dashboard');
})->name('dean-dashboard');


Route::get('/request-form', function () {
    return view('requester.request-form');
})->name('requester.request-form');


Route::resource('purchases', PurchasesController::class);
