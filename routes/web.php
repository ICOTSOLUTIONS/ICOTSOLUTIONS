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
Route::view('/services', 'client.pages/services');
Route::view('/contact', 'client.pages/contact');
Route::view('/portfolio', 'client.pages/portfolio');
Route::view('/webDesigning', 'client.pages/webDesigning');
Route::view('/WebDevelopment', 'client.pages/WebDevelopment');
Route::view('/AppDevelopment', 'client.pages/AppDevelopment');
Route::view('/GraphicDesigning', 'client.pages/GraphicDesigning');
Route::view('/DigitalMarketing', 'client.pages/DigitalMarketing');
Route::view('/CohesiveBranding', 'client.pages/CohesiveBranding');