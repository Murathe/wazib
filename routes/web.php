@endif
                    @if (Session::get('is_logged_in') == TRUE)
                    You are logged in!
                    @else
                    You are Logged Out!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
(edited)






Joyce Mungai  12:29 PM
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
    return view('home');
});
Auth::routes();
Route::get('/addTherapist', function(){
    return view('save_therapists');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'Auth\LoginController@authenticate'); 
Route::get('/addTherapist', function(){
    return view('save_therapists');
}); 
Route::post('/addNewTherapistToDB', 'HomeController@addNewTherapistToDB'); 
Route::get('/displayTherapists', 'HomeController@displayAllTherapists');
Route::get('/createAssessment', 'HomeController@createAssessment');
Route::get('/logout', 'HomeController@logout'); 
    Route::get('laraquiz/home', 'HomeController@laraquizIndex');
    Route::resource('tests', 'TestsController');
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'UserActionsController');
    Route::resource('topics', 'TopicsController');
    Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);
use App\Http\Controllers\contentsController;
Route::get('contents','contentsController@index');  //controller styles for urls and routes
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