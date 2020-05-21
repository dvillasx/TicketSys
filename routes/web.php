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

Route::get('reporte.indexa', 'ReporteController@indexa')->name('reporte.indexa');

Route::resource('archivo', 'ArchivoController')->middleware('auth');

Route::get('area/{area}/asig', 'AreaController@getAsig');

Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');

Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');

Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');
