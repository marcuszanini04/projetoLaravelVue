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
    return 'Seja bem vindo ao curso';
});

Route::get('/sobre-nos', function () {
    return 'Sobre nos';
});

Route::get('/contato', function () {
    return 'Contato';
});

//test 0508 salve
