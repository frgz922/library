<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Libros
Route::get('books', 'BooksController@listOfBooks');

//Autores
Route::get('authors', 'AuthorsController@listOfAuthors');

//Categorias
Route::get('categories', 'CategoriesController@listOfCategories');

//Editoriales
Route::get('publishers', 'PublishersController@listOfPublishers');