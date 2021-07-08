<?php

use App\Http\Controllers\FakultasController;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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
    return view('page/beranda');
})->name('home');

Route::get('/loginAdmin', function (){
    return view('loginAdmin');
})->name('loginAdmin');



Route::get('/contact', function(){
    return view('page/contact');
})->name('contact');

Route::get('/dashboardAdmin', function () {
    return view('page/dashboardAdmin');
})->name('dashboardAdmin');

//database connectivity
Route::get('/fakultas',[FakultasController::class, 'index'])->name('fakultas');
Route::get('/infoUkm',[App\Http\Controllers\UkmController::class, 'index']);
Route::get('/gallery',[App\Http\Controllers\ImageController::class, 'index']);

//admin
Route::prefix('admin')->group(function(){
    Route::get('/',[Admin\Auth\LoginController::class, 'loginForm']);
    Route::get('/login',[Admin\Auth\LoginController::class, 'loginForm'])->name('admin.login');
    Route::get('/home',[Admin\HomeController::class, 'index'])->name('admin.home');
});
