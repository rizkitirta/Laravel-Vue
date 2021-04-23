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

Route::get('/{any}', function () {
    return view('latihan1');
});

Route::get('/{any}/{any2}', function () {
    return view('latihan1');
});

Route::get('/{any}/{any2}/{any3}', function () {
    return view('latihan1');
});
