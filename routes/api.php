<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LeaguesController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('leagues', 'Api\LeaguesController');
Route::apiResource('groups', 'Api\GroupsController');
Route::apiResource('teams', 'Api\TeamsController');
Route::apiResource('matchs', 'Api\MatchsController');

// Register and Login
Route::post('user/register', 'Api\RegisterController@register');
Route::post('user/login', 'Api\LoginController@login');