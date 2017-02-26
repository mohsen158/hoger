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
Route::get('foods/{foodid}', function ($foodid){
    $food = App\Food::where('id', $foodid)->firstOrFail();
    return view('food', ['food' => $food]);
});

//Admin page inserting food
Route::get('/insertfood', function(){
  return view('addFood');
});

Route::post('addcomment', 'HomeController@addcomment');

Route::post('/insertfood', 'HomeController@addFoodPost');
Route::get('hoger/foods', 'HomeController@getFoods');
