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

    $data = [
        "title" => "Hello World - Homepage"
    ];

    return view('home', $data);
})->name('Homepage');

Route::get('page1', function(){

    $data = [
        "title" => "Hello World - Pagina 1"
    ];


    return view('page1', $data);
})->name('Pagina1');



Route::get('page2', function(){

    $data = [
        "title" => "Hello World - Pagina 2"
    ];


    return view('page2', $data);
})->name('Pagina2');
