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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'ApiOlahragaController@index');
Route::get('olahraga/{id}', 'ApiOlahragaController@show');
Route::post('olahraga', 'ApiOlahragaController@store');
Route::put('olahraga/{id}', 'ApiOlahragaController@update');
Route::delete('olahraga/{id}', 'ApiOlahragaController@destroy');
