<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContatoController;
use App\Http\Controllers\Api\TelefoneController;


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
    Route::get('/', [ContatoController::class, 'index']);
    Route::get('/{id}', [ContatoController::class, 'show']);
    Route::delete('/{id}', [ContatoController::class, 'destroy']);
    Route::post('/', [ContatoController::class, 'store']);
    Route::post('/update', [ContatoController::class, 'update']);

    Route::get('/telefones/{id}', [TelefoneController::class, 'show']);
    Route::delete('/telefone/{id}', [TelefoneController::class, 'destroy']);
    Route::post('/telefone', [TelefoneController::class, 'store']);
});


Route::get('/users','App\Http\Controllers\Api\UserController@index');
