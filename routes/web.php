<?php

use App\Http\Controllers\FakultasController;
use App\Models\Fakultas;
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
    return view('page/beranda');
})->name('home');

Route::get('/loginAdmin', function (){
    return view('loginAdmin');
})->name('loginAdmin');

Route::get('/infoUKM', function(){
    return view('page/infoUKM');
})->name('infoUKM');

Route::get('/infoFakultas', function(){
    return view('page/infoFakultas');
})->name('infoFakultas');

Route::get('/gallery', function(){
    return view('page/gallery');
})->name('gallery');

Route::get('/contact', function(){
    return view('page/contact');
})->name('contact');

Route::get('/dashboardAdmin', function () {
    return view('page/dashboardAdmin');
})->name('dashboardAdmin');

//database connectivity
Route::get('/fakultas',[FakultasController::class, 'index']);
