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

//Rota login sistema
Route::get('/sistema',function(){
	return redirect ('/admin');
});


//Rotas acinpode
Route::get('/acinpode',['as' => 'acinpode.home', 'uses' => 'Acinpode\HomeController@index']);
Route::get('/acinpode/quemsomos',['as' => 'acinpode.quemsomos', 'uses' => 'Acinpode\QuemsomosController@index']);
Route::get('/acinpode/servicos',['as' => 'acinpode.servicos', 'uses' => 'Acinpode\ServicosController@index']);
Route::get('/acinpode/noticias',['as' => 'acinpode.noticias', 'uses' => 'Acinpode\NoticiasController@index']);
Route::get('/acinpode/equipe',['as' => 'acinpode.equipe', 'uses' => 'Acinpode\TimeController@index']);
Route::get('/acinpode/transparencia',['as' => 'acinpode.transparencia', 'uses' => 'Acinpode\TransparenciaController@index']);
Route::get('/acinpode/doacao',['as' => 'acinpode.doacao', 'uses' => 'Acinpode\DoacaoController@index']);
Route::get('/acinpode/parceiros',['as' => 'acinpode.parceiros', 'uses' => 'Acinpode\ParceiroController@index']);
Route::get('/acinpode/artigo',['as' => 'acinpode.artigo', 'uses' => 'Acinpode\ArtigoController@index']);

//Rotas assume
Route::get('/assume',['as' => 'assume.home', 'uses' => 'Assume\HomeController@index']);
Route::get('/assume/quemsomos',['as' => 'assume.quemsomos', 'uses' => 'Assume\QuemsomosController@index']);
Route::get('/assume/servicos',['as' => 'assume.servicos', 'uses' => 'Assume\ServicosController@index']);
Route::get('/assume/noticias',['as' => 'assume.noticias', 'uses' => 'Assume\NoticiasController@index']);
Route::get('/assume/equipe',['as' => 'assume.equipe', 'uses' => 'Assume\TimeController@index']);
Route::get('/assume/transparencia',['as' => 'assume.transparencia', 'uses' => 'Assume\TransparenciaController@index']);
Route::get('/assume/doacao',['as' => 'assume.doacao', 'uses' => 'Assume\DoacaoController@index']);
Route::get('/assume/parceiros',['as' => 'assume.parceiros', 'uses' => 'Assume\ParceiroController@index']);

//Rotas lionsclubejm
Route::get('/lionsclubejm',['as' => 'lionsclubejm.home', 'uses' => 'Lionsclubejm\HomeController@index']);
Route::get('/lionsclubejm/quemsomos',['as' => 'lionsclubejm.quemsomos', 'uses' => 'Lionsclubejm\QuemsomosController@index']);
Route::get('/lionsclubejm/servicos',['as' => 'lionsclubejm.servicos', 'uses' => 'Lionsclubejm\ServicosController@index']);
Route::get('/lionsclubejm/noticias',['as' => 'lionsclubejm.noticias', 'uses' => 'Lionsclubejm\NoticiasController@index']);
Route::get('/lionsclubejm/equipe',['as' => 'lionsclubejm.equipe', 'uses' => 'Lionsclubejm\TimeController@index']);
Route::get('/lionsclubejm/transparencia',['as' => 'lionsclubejm.transparencia', 'uses' => 'Lionsclubejm\TransparenciaController@index']);
Route::get('/lionsclubejm/doacao',['as' => 'lionsclubejm.doacao', 'uses' => 'Lionsclubejm\DoacaoController@index']);
Route::get('/lionsclubejm/parceiros',['as' => 'lionsclubejm.parceiros', 'uses' => 'Lionsclubejm\ParceiroController@index']);

//Rotas apasmon
Route::get('/apasmon',['as' => 'apasmon.home', 'uses' => 'Apasmon\HomeController@index']);
Route::get('/apasmon/quemsomos',['as' => 'apasmon.quemsomos', 'uses' => 'Apasmon\QuemsomosController@index']);
Route::get('/apasmon/servicos',['as' => 'apasmon.servicos', 'uses' => 'Apasmon\ServicosController@index']);
Route::get('/apasmon/noticias',['as' => 'apasmon.noticias', 'uses' => 'Apasmon\NoticiasController@index']);
Route::get('/apasmon/equipe',['as' => 'apasmon.equipe', 'uses' => 'Apasmon\TimeController@index']);
Route::get('/apasmon/transparencia',['as' => 'apasmon.transparencia', 'uses' => 'Apasmon\TransparenciaController@index']);
Route::get('/apasmon/doacao',['as' => 'apasmon.doacao', 'uses' => 'Apasmon\DoacaoController@index']);
Route::get('/apasmon/parceiros',['as' => 'apasmon.parceiros', 'uses' => 'Apasmon\ParceiroController@index']);
Route::get('/apasmon/artigo',['as' => 'apasmon.artigo', 'uses' => 'Apasmon\ArtigoController@index']);

//Rotas cbomsamaritano
Route::get('/cbomsamaritano',['as' => 'cbomsamaritano.home', 'uses' => 'Cbomsamaritano\HomeController@index']);
Route::get('/cbomsamaritano/quemsomos',['as' => 'cbomsamaritano.quemsomos', 'uses' => 'Cbomsamaritano\QuemsomosController@index']);
Route::get('/cbomsamaritano/servicos',['as' => 'cbomsamaritano.servicos', 'uses' => 'Cbomsamaritano\ServicosController@index']);
Route::get('/cbomsamaritano/noticias',['as' => 'cbomsamaritano.noticias', 'uses' => 'Cbomsamaritano\NoticiasController@index']);
Route::get('/cbomsamaritano/equipe',['as' => 'cbomsamaritano.equipe', 'uses' => 'Cbomsamaritano\TimeController@index']);
Route::get('/cbomsamaritano/transparencia',['as' => 'cbomsamaritano.transparencia', 'uses' => 'Cbomsamaritano\TransparenciaController@index']);
Route::get('/cbomsamaritano/doacao',['as' => 'cbomsamaritano.doacao', 'uses' => 'Cbomsamaritano\DoacaoController@index']);
Route::get('/cbomsamaritano/parceiros',['as' => 'cbomsamaritano.parceiros', 'uses' => 'Cbomsamaritano\ParceiroController@index']);

//Rotas creser
Route::get('/creser',['as' => 'creser.home', 'uses' => 'Creser\HomeController@index']);
Route::get('/creser/quemsomos',['as' => 'creser.quemsomos', 'uses' => 'Creser\QuemsomosController@index']);
Route::get('/creser/servicos',['as' => 'creser.servicos', 'uses' => 'Creser\ServicosController@index']);
Route::get('/creser/noticias',['as' => 'creser.noticias', 'uses' => 'Creser\NoticiasController@index']);
Route::get('/creser/equipe',['as' => 'creser.equipe', 'uses' => 'Creser\TimeController@index']);
Route::get('/creser/transparencia',['as' => 'creser.transparencia', 'uses' => 'Creser\TransparenciaController@index']);
Route::get('/creser/doacao',['as' => 'creser.doacao', 'uses' => 'Creser\DoacaoController@index']);
Route::get('/creser/parceiros',['as' => 'creser.parceiros', 'uses' => 'Creser\ParceiroController@index']);
Route::get('/creser/artigo',['as' => 'creser.artigo', 'uses' => 'Creser\ArtigoController@index']);

//Rotas do admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){

    CRUD::resource('doacao', 'DoacaoCrudController');
    CRUD::resource('contato', 'ContatoCrudController');
    CRUD::resource('noticia', 'NoticiaCrudController');
    CRUD::resource('parceiro', 'ParceiroCrudController');
    CRUD::resource('osc', 'OscCrudController');
    CRUD::resource('somo', 'SomoCrudController');
    CRUD::resource('rodape', 'RodapeCrudController');
    CRUD::resource('slideshow', 'SlideshowCrudController');
    CRUD::resource('time', 'TimeCrudController');
    CRUD::resource('cor', 'CorCrudController');
    CRUD::resource('rede', 'RedeCrudController');
    CRUD::resource('transparencia', 'TransparenciaCrudController');


});