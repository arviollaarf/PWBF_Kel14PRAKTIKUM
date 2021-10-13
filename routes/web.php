<?php

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




Route::get('/about', function () {
    return view  ('About', [
        "nama" => "Kelompok 14",
        "pengantar" => "Selamat datang di viola boutique"
    ]);
});


Route::get('/', function () {
    return view('home');
}); //GAUSA DIAPA2IN


Route::get('/home', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/pendataan', function () {
    return view('pendataan');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('TERAKHIRController', 'App\Http\Controllers\TERAKHIRController@Index');

