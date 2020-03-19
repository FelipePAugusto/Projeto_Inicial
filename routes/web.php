<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::group(['middleware'=>'auth'],function(){

  Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
  Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
  Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
  Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
  Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
  Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);

  Route::get('/admin/ordens',['as'=>'admin.ordens','uses'=>'Admin\OrdemServicoController@index']);
  Route::get('/admin/ordens/adicionar',['as'=>'admin.ordens.adicionar','uses'=>'Admin\OrdemServicoController@adicionar']);
  Route::post('/admin/ordens/salvar',['as'=>'admin.ordens.salvar','uses'=>'Admin\OrdemServicoController@salvar']);
  Route::get('/admin/ordens/editar/{id}',['as'=>'admin.ordens.editar','uses'=>'Admin\OrdemServicoController@editar']);
  Route::put('/admin/ordens/atualizar/{id}',['as'=>'admin.ordens.atualizar','uses'=>'Admin\OrdemServicoController@atualizar']);
  Route::get('/admin/ordens/delete/{id}',['as'=>'admin.ordens.deletar','uses'=>'Admin\OrdemServicoController@deletar']);

  Route::get('/admin/produtos',['as'=>'admin.produtos','uses'=>'Admin\ProdutoController@index']);
  Route::get('/admin/produtos/adicionar',['as'=>'admin.produtos.adicionar','uses'=>'Admin\ProdutoController@adicionar']);
  Route::post('/admin/produtos/salvar',['as'=>'admin.produtos.salvar','uses'=>'Admin\ProdutoController@salvar']);
  Route::get('/admin/produtos/editar/{id}',['as'=>'admin.produtos.editar','uses'=>'Admin\ProdutoController@editar']);
  Route::put('/admin/produtos/atualizar/{id}',['as'=>'admin.produtos.atualizar','uses'=>'Admin\ProdutoController@atualizar']);
  Route::get('/admin/produtos/delete/{id}',['as'=>'admin.produtos.deletar','uses'=>'Admin\ProdutoController@deletar']);

});
