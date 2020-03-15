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
Route::get('content','contentsController@contents'); 

Route::post('content/store','contentsController@storeContents');
Route::post('storeTag','contentsController@storeTags');

// for deleting
Route::delete('content/{id}', 'contentsController@deleteContent');




// Route::get('/', function () {
//     return view('contents');             //closure style for urls
// });
