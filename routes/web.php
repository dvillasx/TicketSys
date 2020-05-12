<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);


Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('reporte', 'ReporteController')->middleware('auth');


// Route::get('area/{area}/tipo', 'AreaController@getTipos');

// Route::get('area/{area}/asig', 'AreaController@getAsig');
