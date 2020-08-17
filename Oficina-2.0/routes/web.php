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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::any('/search', 'PesquisaController@index')->name('search');	//Chama a função relacionada à pesquisa de orçamento
Route::get('/create','OrcamentosController@create')->name('create');	//Redireciona à tela de cadastro de orçamento 
Route::post('store','OrcamentosController@store')->name('store');	//Chama a função que armazena orçamentos cadastrados no banco de dados



Route::get('/home', 'HomeController@index')->name('home');
