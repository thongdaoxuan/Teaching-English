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
use App\Question;
use App\Answer;
Route::get('/', function () {
	//echo Answer::all();
	return Redirect::to('/choose-category');
});

Route::get('/choose-category', function () {
	//echo Question::all();
	return view('choose_category');
});

Route::get('/choise-skill', function () {
	//echo Question::all();
	return view('choise_skill');
});

Route::get('/detail-category', function () {
	//echo Question::all();
	return view('detail_category');
});

Route::get('/test-short', function () {
	//echo Question::all();
	return view('test_short');
});

Route::get('/type-learn', function () {
	//echo Question::all();
	return view('type_learn');
});

Route::get('/header', function () {
	//echo Question::all();
	return view('header');
});

Route::get('/see-leanr', function () {
	//echo Question::all();
	return view('see_again_learn');
});

Route::get('learn/{ca_id}', 'TestController@index');
Route::get('test/{ca_id}', 'TestController@testShort');

Route::get('admin/', function () {
    //echo Question::all();
    return view('/auth/login');
});


Route::get('home', 'TestController@welcome');
Auth::routes();
Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
	
	Route::resource('','CategoryController');
	Route::resource('categories','CategoryController');
	Route::resource('questions','QuestionController');
	Route::resource('answer','AnswerController');
});