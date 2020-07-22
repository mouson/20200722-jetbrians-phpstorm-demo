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

Route::get('/demo03-ex01', function () {
    return include app_path('Legacies/Demo03Example01.php');
});

Route::get('/demo03-g01', function () {
    return include app_path('Legacies/Demo03Global01.php');
});

Route::get('/demo03-g02', function () {
    return include app_path('Legacies/Demo03Global02.php');
});

Route::get('/demo03-g03', function () {
    return include app_path('Legacies/Demo03Global03.php');
});
