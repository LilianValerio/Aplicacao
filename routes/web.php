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
});

Route::get('password', function () {
    return view('password');
});

Route::get('logar', function () {
    return view('login');
});

Route::get('paciente', function () {
    return view('GerenciarPacientes');
});

Route::get('dependente', function () {
    return view('GerenciarDependentes');
});

Route::get('profissional', function () {
    return view('GerenciarProfissionais');
});
