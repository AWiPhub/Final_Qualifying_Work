<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CityController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\ProjectsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/api/city', 'CityController@addCity');
// Route::post('/api/city/create', [CityController::class, 'create']);

Route::get('/cities/search', [CityController::class, 'search']);
Route::get('/cities/{id}', [CityController::class, 'getById']);
Route::post('/cities', [CityController::class, 'create']);
// Route::put('/cities', [CityController::class, 'update']);
Route::delete('/cities', [CityController::class, 'delete']);

Route::get('/news/search', [NewsController::class, 'search']);
Route::get('/news/{id}', [NewsController::class, 'getById']);
Route::post('/news', [NewsController::class, 'create']);
// Route::put('/news', [NewsController::class, 'update']);
Route::delete('/news', [NewsController::class, 'delete']);

Route::get('/attractions/search', [AttractionsController::class, 'search']);
Route::get('/attractions/{id}', [AttractionsController::class, 'getById']);
Route::post('/attractions', [AttractionsController::class, 'create']);
// Route::put('/attractions', [AttractionsController::class, 'update']);
Route::delete('/attractions', [AttractionsController::class, 'delete']);

Route::get('/projects/search', [ProjectsController::class, 'search']);
Route::get('/projects/{id}', [ProjectsController::class, 'getById']);
Route::post('/projects', [ProjectsController::class, 'create']);
// Route::put('/projects', [ProjectsController::class, 'update']);
Route::delete('/projects', [ProjectsController::class, 'delete']);

Route::get('/hello', [ProjectsController::class, 'search']);
// Route::put('/hello', [ProjectsController::class, 'update']);
