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
    //'users' => 'UserController', 
    'dependentes' => 'userDependenteController',
    'home' => 'HomeController'
]);

Route::get('/', function () {
    return view('Index');
});

Route::get('cadastro', function () {
    return view('auth.register');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('home', function () {
    return view('home_user');
});

Route::get('index', function () {
    return view('Index');
});

Route::get('cadastrodependente', function () {
    return view('dependente.CadastroDependente');
});

Route::get('gerenciarDependentes', function () {
    return view('dependente.GerenciarDependentes');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
