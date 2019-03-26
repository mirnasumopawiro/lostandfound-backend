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

		Route::get('ping', function(){
			return 'pong';
		});

		// Route::middleware('auth:api')->get('/user', function (Request $request) {
  //   		return $request->user();
		// });

		Route::get('getUser', 'UserController@getUser');
		Route::post('createUser', 'UserController@createUser');
		Route::put('updateUser', 'UserController@updateUser');
		Route::delete('deleteUser', 'UserController@deleteUser');

		Route::get('getThread', 'ThreadController@getThread');
		Route::post('createThread', 'ThreadController@createThread');
		Route::put('updateThread', 'ThreadController@updateThread');
		Route::delete('deleteThread', 'ThreadController@deleteThread');
