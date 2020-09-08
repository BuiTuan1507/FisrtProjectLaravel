<?php

use App\Article;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[
   'as' => 'article.index',
   'uses' => 'PageController@index']);
//goi den controller ham index
Route::get('/article/{id}',[
   'as' => 'article.show',//dung nhu 1 route
   'uses' => 'ArticleController@show']);//goi den ham show trong articleController
   
Route::get('/articles','ArticleController@index');
Route::get('/articles/create',[
   'as' =>'article.create',
   'uses' => 'ArticleController@create'
]);
Route::post('/articles',[
   'as'=>'article.store',
   'uses'=>'ArticleController@store'
]);


?>
