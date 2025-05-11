<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-menu', function () { return view('admin-menu');});
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user-menu', function () { return view('user-menu');});
});

require __DIR__.'/auth.php';
