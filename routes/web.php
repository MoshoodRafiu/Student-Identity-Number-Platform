<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});

Auth::routes(['register' => false, 'login' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('user/register', [App\Http\Controllers\HomeController::class, 'register'])->name('user.register');
Route::post('user/store', [App\Http\Controllers\HomeController::class, 'store'])->name('user.store');
Route::get('user/{user}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit');
Route::put('user/{user}/update', [App\Http\Controllers\HomeController::class, 'update'])->name('user.update');
Route::delete('user/{user}/delete', [App\Http\Controllers\HomeController::class, 'destroy'])->name('user.delete');
