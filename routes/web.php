<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dit is om de help pagina te laten zien
Route::get('/help', function(){
    return view('help');
})->name('help');

// Voeg hier je eigen routes toe
Route::get('/laravel-links', function (){
    return view('links\links');
})->name('links');

Route::post('/laravel-links/add', function (){
    return view('links\links-add');
})->name('links-add');
