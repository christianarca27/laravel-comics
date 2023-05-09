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
    $comics = config('comics');

    return view('home', compact('comics'));
})->name('home');

Route::get('/action-comics/{index}', function (int $index) {
    $comics = config('comics');
    $comic = $comics[$index];

    return view('action-comics', compact('comic'));
})->name('action-comics');
