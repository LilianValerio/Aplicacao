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
    'home' => 'HomeController',
    'profissional' => 'userProfissionalController',
    'relatorio' => 'relatorioController',
    'relatorioAcompanhamento' => 'relatorioAcompanhamentoController',
    'relatorioComparativo' => 'relatorioComparativoController',
    'associar'=> 'dependentes_ProController'
     ]);

Route::get('/criarprofissional', function () {
    return view('profissional.CadastroProfissional');
});

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

//Route::get('atividades/{id}', function ($id) {
//   return Redirect::route('atividades.dep_atividade', $id);
//});
Route::get('/atividades/iniciais/{id}', 'AtividadeController@dep_atividade');

Route::get('/atividades/{id}', 'AtividadeController@index')->name('atividades');
Route::get('/atividades/tutorial/{id}', 'AtividadeController@tutorial')->name('tutorial');


Route::get('atividades/{id}/{id_atvd}', 'AtividadeController@dep_atividade')->name('dep_atividades');


Route::get('/atividades/iniciais/{id}', 'AtividadeController@dep_atividade');

Route::get('/atividades/{id}', 'AtividadeController@index')->name('atividades');


Route::get('atividades/{id}/{id_atvd}', 'AtividadeController@dep_atividade')->name('dep_atividades');
Route::get('resultAtividades/{atividade_id}/{dependente_id}', 'resultAtividadeController@insert')->name('resultAtividades');
Route::put('/resultAtividades/update/{id}/{id_dep}', 'resultAtividadeController@update')->name('resultatividades.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
