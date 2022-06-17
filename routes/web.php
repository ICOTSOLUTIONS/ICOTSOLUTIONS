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

// Route::get('/', function () {
//     return view('welcome');
    
// });
Route::view('/', 'client.pages/index');
Route::view('/about', 'client.pages/about');
Route::view('/service', 'client.pages/service');
Route::view('/contact', 'client.pages/contact');
Route::view('/portfolio', 'client.pages/portfolio');