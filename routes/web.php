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

Route::get('/', function () {
    return view('Index');
});

Route::get('home', function () {
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

Route::get('cadastrodependente', function () {
    return view('CadastroDependente');
});

Route::get('cadastroprofissional', function () {
    return view('CadastroProfissional');
});

Route::get('exercicio', function () {
    return view('exercicio');
});

Route::get('gerenciarDependentes', function () {
    return view('GerenciarDependentes');
});


Route::get('gerenciarPacientes', function () {
    return view('GerenciarPacientes');
});


Route::get('gerenciarProfissionais', function () {
    return view('GerenciarProfissionais');
});







