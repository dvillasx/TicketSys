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


// Rutas para listado y carga de archivos

Route::resource('archivo', 'ArchivoController')->middleware('auth');

// Route::get('archivo', function () {
//     $archivos = App\Archivo::all();
//     return view('archivos.archivoIndex', compact('archivos'));
// });
// Route::get('archivo/formulario', function () {
//     return view('archivos.archivoForm');
// });

Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');

Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');

Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');
