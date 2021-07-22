<?php

use App\Http\Controllers\Api\ContatoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'App\Http\Controllers\Api\AuthController@login');

Route::group(['prefix' => 'contatos', 'middleware' => ['authGuard']], function(){
    Route::get('/', 'App\Http\Controllers\Api\ContatoController@index');
});


Route::get('/users','App\Http\Controllers\Api\UserController@index');
