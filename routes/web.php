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


Route::group(['prefix'=>'admin'],function (){
   Route::resource('users','UsersController');
   Route::get('users/{id}/destroy',[
       'uses'=>'UsersController@destroy',
       'as'=>'users.destroy'
   ]);

   Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy',[
        'uses'=>'CategoriesController@destroy',
        'as'=>'categories.destroy'
    ]);

    Route::resource('articles','ArticlesController');
    Route::get('articles/{id}/destroy',[
        'uses'=>'ArticlesController@destroy',
        'as'=>'articles.destroy'
    ]);



});


