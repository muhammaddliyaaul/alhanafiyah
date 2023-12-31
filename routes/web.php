<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes();

Route::resource('home', HomeController::class);
Route::resource('kategori', KategoriController::class);

Route::get('home/{id}/hapus', [HomeController::class, 'hapus'])->name('home.hapus');
Route::delete('/hapusAll',[HomeController::class,'hapusAll'])->name('deleteSelected');
