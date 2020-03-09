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

use App\Http\Controllers\contentsController;


Route::get('/', function () { 
    return view('welcome');
});


Route::get('landing/', function () {
  return view('landing');
});
// Route::get('/', 'welcome');
Route::get('/contents','contentsController@index');  //controller styles for urls and routes
Route::get('images','contentsController@images');  
Route::get('videos','contentsController@videos');  
Route::get('texts','contentsController@texts'); 
Route::get('audios','contentsController@audios'); 

Route::post('images','contentsController@images');
Route::post('videos','contentsController@videos');
Route::post('texts','contentsController@texts');
Route::post('audios','contentsController@audios');




// Route::get('/', function () {
//     return view('contents');             //closure style for urls
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'Auth\LoginController@authenticate'); 
