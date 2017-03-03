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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/materials', "MaterialsController@index");
Route::get('/materials/add', "MaterialsController@add");
Route::get('/materials/edit/{id}', "MaterialsController@edit");
Route::get('/materials/{id}/material-options', "MaterialsController@materialOption");

Route::post('/materials/store', "MaterialsController@store");
Route::put('/materials/update', "MaterialsController@update");
Route::get('/materials/delete/{id}', "MaterialsController@delete");

Auth::routes();

Route::get('/home', 'HomeController@index');
