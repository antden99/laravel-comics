<?php

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

    $arrayList = config('db.product');
    
    return view('layout.welcome', compact('arrayList')); //essendo che ho spostato la pagina di benvenuto nella cartella layout presente in view devo mettere layout . "nome inizio cartella"
})->name('home'); //route('home') questa funzione mi crea l'URL per arrivare a questa rotta

Route::get('characters', function () {
    return view('characters');
})->name('characters');

Route::get('movies', function () {
    return view('movies');
})->name('movies');

Route::get('tv', function () {
    return view('tv');
})->name('tv');

Route::get('comics', function () {
    return view('comics');
})->name('comics');

Route::get('games', function () {
    return view('games');
})->name('games');

Route::get('collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('videos', function () {
    return view('videos');
})->name('videos');

Route::get('fans', function () {
    return view('fans');
})->name('fans');

Route::get('news', function () {
    return view('news');
})->name('news');

Route::get('shop', function () {
    return view('shop');
})->name('shop');
