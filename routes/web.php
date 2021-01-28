<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ PurchasesController;
use App\Http\Controllers\ RequesterController;
use App\Http\Controllers\ DeanController;
use App\Http\Controllers\ InquiryController;
use App\Http\Controllers\ AdminController;

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



// Homepage

Route::get('/', function () {
    return view('homepage');
})->name('homepage');


// admin
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->name('admin-dashboard');

Route::get('/admin/requestlist', [AdminController::class,'getreqlist']);

Route::get('/admin/requestlist/{id}', [AdminController::class,'getreq']);

Route::get('/admin/historylist', [AdminController::class,'gethistorylist']);

Route::get('/admin/historylist/{id}', [AdminController::class,'gethistory']);

// dean
Route::get('/dean-dashboard', function () {
    return view('dean.dashboard');
})->name('dean-dashboard');

Route::get('/dean/requestlist/{faculty}', [DeanController::class,'getreqlist']);

Route::get('/dean/requestlist/{faculty}/{id}', [DeanController::class,'getreq']);

Route::get('/dean/historylist/{faculty}', [DeanController::class,'gethistorylist']);

Route::get('/dean/historylist/{faculty}/{id}', [DeanController::class,'gethistory']);





Route::resource('purchases', PurchasesController::class);
Route::resource('inquiries', InquiryController::class);

// Requester Controller

Route::get('/requester-dashboard', function () {
    return view('requester.dashboard');
})->name('requester-dashboard');

Route::get('/requester/myrequest/{mmu_id}', [RequesterController::class,'getreqlist']);

Route::get('/requester/myrequest/{mmu_id}/{id}',[RequesterController::class,'getreq'] );

Route::get('/requester/history/{mmu_id}',[RequesterController::class,'gethistorylist'] );

Route::get('/requester/history/{mmu_id}/{id}', [RequesterController::class,'gethistory']);



Route::get('/request-form', function () {
    return view('requester.request-form');
})->name('requester.request-form');
