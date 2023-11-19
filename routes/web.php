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
    // prendo con config tutti i prodotti con l'array
    $products = config('products');
    // passo qui tutti i prodotti da mostrare
    return view('uomo', compact('products'));
})->name('uomo');

Route::get('/donna', function () {
    return view('donna');
})->name('donna');

Route::get('/bambino', function () {
    return view('bambino');
})->name('bambino');


