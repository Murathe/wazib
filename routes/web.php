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

Route::get('contents','contentsController@index');  //controller styles for urls and routes
Route::get('contents/images','contentsController@images');  
Route::get('contents/videos','contentsController@videos');  
Route::get('contents/texts','contentsController@texts'); 
Route::get('contents/audios','contentsController@audios'); 

Route::post('contents/images','contentsController@storeImages');
Route::post('contents/videos','contentsController@storeVideos');
Route::post('contents/texts','contentsController@storeTexts');
Route::post('contents/audios','contentsController@storeAudios');




// Route::get('/', function () {
//     return view('contents');             //closure style for urls
// });
