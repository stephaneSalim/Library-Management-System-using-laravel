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

Route::get('/test', function(){
  return view('test');
});
Route::post('/issueBookSubmit', 'BooksIssuedController@index');

Route::get('/booksList', 'BooksController@index');
Route::get('/addBooks', 'BooksController@create');
Route::post('/addBooks', 'BooksController@store');

Route::get('/categoriesList','BooksCategoryController@index');
Route::get('/addCategories', 'BooksCategoryController@create');
Route::post('/addCategories', 'BooksCategoryController@store');


Route::get('/issueBooks', function () {
    return view('issueBooks');
});
Route::get('/issuedBooks', function () {
    return view('issuedBooks');
});

Route::get('/membersList', 'MemberController@index');
Route::get('/addMembers',  'MemberController@create');
Route::post('/addMembers', 'MemberController@store');


Route::get('/returnBooks', function () {
    return view('returnBookss');
});

Route::get('/addThesis', 'ThesisController@create');
Route::post('/addThesis', 'ThesisController@store');

Route::get('/thesisList', function () {
    return view('thesisList');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/main', function () {
    return view('layouts.sidebar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
