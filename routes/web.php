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
    return view('welcome');
});

/*Route::get('/articles/',[
    'as' => 'articles',
    'uses'=> 'UserController@index'

],function (){
    echo 'Bienvenido a articles ';
});*/

Route::group(['prefix'=>'articles'],function (){
   /* Route::get('view/{article?}',function ($article='vacio'){
       echo 'Articulo: '.$article;
    });*/
    Route::get('view/{id}',['uses' =>'TestController@view',
        'as'=>'articlesView']);
});

