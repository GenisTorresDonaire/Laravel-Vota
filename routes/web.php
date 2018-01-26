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

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return view('auth.logout');
});

Route::resource("consultas","ConsultaController");

/*
Route::get('consultas', function () {
    return view('consultas.consultas');
});

Route::get('crear', function () {
    return view('consultas.crear_consultas');
});

Route::get('invitar', function () {
    return view('consultas.invitar_consultas');
});
*/

?>
