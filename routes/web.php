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

Route::get('/','contentsController@index');  //controller styles for urls and routes
Route::get('images','contentsController@images');  
Route::get('videos','contentsController@videos');  
Route::get('texts','contentsController@texts'); 
Route::get('audios','contentsController@audios'); 

Route::post('images','contentsController@storeImages');
Route::post('videos','contentsController@storeVideos');
Route::post('texts','contentsController@storeTexts');
Route::post('audios','contentsController@storeAudios');




// Route::get('/', function () {
//     return view('contents');             //closure style for urls
// });
