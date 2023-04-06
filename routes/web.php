<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intro', function () {
    return view('intro.index');
});

// Route::get('calcul', [App\Http\Controllers\FormController::class, 'calculer']);
// Route::post('calcul', [App\Http\Controllers\FormController::class, 'store']);

Route::get('/calcul', 'FormController@calculer'); 
Route::post('/calcul', 'FormController@store'); 

Route::resource('multiplication', 'MultiplicationController');

