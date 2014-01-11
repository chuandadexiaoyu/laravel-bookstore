<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

#Route For User
Route::get('/', 'UserBooksController@showBooks');
Route::any('/category/{category_id}', 'UserBooksController@showByCategory');
Route::get('/viewcart', 'ShoppingCartController@ShowCart');

#Route For Category
Route::get('/admin/cat-list', 'CategoryController@showList');
Route::any('/admin/cat-add', 'CategoryController@createCategory');
Route::any('/admin/cat-edit/{id}', 'CategoryController@editCategory');
Route::get('/admin/cat-del/{id}', 'CategoryController@delete');

#Route For Books
Route::get('/admin/book-list', 'BookController@showBookList');
Route::any('/admin/book-add', 'BookController@createBook');
Route::any('/admin/book-edit/{id}', 'BookController@editBook');
Route::get('/admin/book-del/{id}', 'BookController@delBook');


