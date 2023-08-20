<?php

use App\Http\Controllers\ApiNotesController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('notes', [ApiNotesController::class, 'index']);
    Route::post('notes', [ApiNotesController::class, 'store']);
    Route::get('notes/{note}', [ApiNotesController::class, 'show']);
    Route::patch('notes/{note}', [ApiNotesController::class, 'update']);
    Route::put('notes/{note}', [ApiNotesController::class, 'update']);
    Route::delete('notes/{note}', [ApiNotesController::class, 'destroy']);

// Route::apiResource('/notes/index', ApiNotesController::class);
// Route::resource('/notes/index',ApiNotesController::class)->only(['index','show']);
