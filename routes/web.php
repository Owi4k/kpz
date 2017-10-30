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

Route::get('/', "HomeController@index");

Auth::routes();

Route::get('/add_article', function() {
    return view('add_article');
});

Route::post('/add_article_db', "ArticleController@addArticle");
Route::get("/article/{id}", "ArticleController@showArticle");