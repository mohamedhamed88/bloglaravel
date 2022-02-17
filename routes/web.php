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
Route::get('/administration', 'AdminController@index')->name('admin');
Route::post('/addarticle', 'AdminController@addArticle')->name('addarticle');

Route::get('/admincategory', 'AdminController@categories')->name('admincategory');
Route::post('/addcategory', 'AdminController@addCategory')->name('addcategory');
Route::get('/administrationcategory', 'AdminController@authors')->name('adminauthor');
Route::post('/addauthor', 'AdminController@addAuthor')->name('addauthor');
