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
    return view('welcome');
});

Route::get('test', function () {
    $data = [
        "rows" => [
            "Riga 1",
            "Riga 2",
            "Riga 3",
            "Riga 4",
            "Riga 5"
        ],
    ];
    return view('prova', $data);
});

Route::get('user', function () {
    $data = [
        "name" => "Lorenzo",
        "surname" => "Magro"
    ];
    return view('user', $data);
});
