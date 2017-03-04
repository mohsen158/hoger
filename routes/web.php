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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/semantic2', function(){
  return view('semantic');
});

Route::post('semantic2/{food}', 'HomeController@food');
Route::get('foods/{food}', 'HomeController@getfood');

//Admin page inserting food
Route::get('/insertfood', function(){
  return view('addFood');
});
Route::get('internet','HomeController@internet');
Route::post('addcomment', 'HomeController@addcomment');
Route::post('like/{food}/{user}','HomeController@like');
Route::post('dislike/{food}/{user}','HomeController@dislike');
Route::post('/insertfood', 'HomeController@addFoodPost');
Route::get('foods', 'HomeController@getFoods')->name('foods');
