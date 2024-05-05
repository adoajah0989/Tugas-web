<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts/home');
});
Route::get('/pertemuan/{id}', function ($id) {
    return view('/layouts/pertemuan_'.$id);
});
Route::get('/pertemuan/{id}/{tugas}', function ($id,$tugas) {
    return view('/components/latihan'.$id.'_'.$tugas);
});


Route::get('/app', function () {
    return view('app');
});


Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


