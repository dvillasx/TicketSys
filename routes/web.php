<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

// Route::get('/home', function () {
//     // Only verified users may enter...
// })->middleware('verified');


Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('reporte', 'ReporteController')->middleware('auth');
