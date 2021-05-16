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



Route::get('/', function () {
    $db_comics = config('comics');
    return view('homepage')->with('comics', $db_comics);
})->name('home');

Route::get('/single/{id}', function ($id) {
    $db_comics = config('comics');
    return view('single')->with('comic', $db_comics[$id]);
})->name('detail');
