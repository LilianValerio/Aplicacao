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


Route::resources([
    'logar' => 'LogarController',
    'posts' => 'PostController',
    'usuario' => 'UsuariosController'
]);

Route::get('/home', function () {
    return view('home');
});

Route::get('cadastro', function () {
    return view('Cadastro');
})->name('jfshf');

Route::post('cadastro','LogarController@direcionar')->name('novoCadastro');

