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

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administration', 'AdminController@index')->middleware('auth')->name('admin');
Route::post('/addarticle', 'AdminController@addArticle')->middleware('auth')->name('addarticle');
Route::get('/detailpost/{id}', 'PostController@detailPost')->name('detailpost');

Route::post('/add_comment', 'PostController@addComment');
Route::get('/admincategory', 'AdminController@categories')->middleware('auth')->name('admincategory');
Route::post('/addcategory', 'AdminController@addCategory')->middleware('auth')->name('addcategory');
Route::get('/administrationcategory', 'AdminController@authors')->middleware('auth')->name('adminauthor');
Route::post('/addauthor', 'AdminController@addAuthor')->middleware('auth')->name('addauthor');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
