<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/get-question/{ca_id}', function ($ca_id) {
	$sql="SELECT *
			FROM (
				SELECT qu.*
				,(SELECT GROUP_CONCAT('{\"an_id\":',an.an_id,',\"an_content\":\"',an.an_content,'\",\"an_image\":\"',an.an_image ,'\",\"an_audio\":\"',an.an_audio ,'\",\"an_type\":',an.an_type,',\"an_correct\":\"',an.an_correct,'\"}')
					   FROM answer as an
						WHERE qu.qu_id = an.qu_id AND qu.ca_id = '$ca_id'
					   ) AS answers
				
				FROM question as qu ) as A
			WHERE LENGTH (A.answers)>0
			LIMIT 0,10";
	$questions = DB::select( DB::raw($sql) );
	return $questions;
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


