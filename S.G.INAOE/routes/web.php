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
    return view('pagInicio');
});

Route::get('/principal', function () {
    return view('pagInicio');
});

// Combina la ruta '/' e '/inicio' para que el url no cambie
// y redireccionar a la página principal sea entendible "{{ url('/principal') }}"
Route::get('/principal', function () {
    return redirect('/');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/tablas', function () {
    return view('Tablas');
});

Route::get('/solicitudServicios', function () {
    return view('solicitudServicios');
});
Route::get('/encuesta', function () {
    return view('encuesta');
});

Route::post('/solicitudServicios', 'App\Http\Controllers\SolicitudServiciosController@generar_pdf')->name('solicitudServicios');
