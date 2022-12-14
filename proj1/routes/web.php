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
    $nome="Matheus";
    return view('welcome', ['nome' => $nome]);
});

Route::get('/contact', function () {
    $nome="Matheus";
    return view('contact', ['nome' => $nome]);
});

Route::get('/produtos', function () {
    return view('products');
});

Route::get('/', function () {
    return view('welcome');
});