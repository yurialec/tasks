<?php

use App\Http\Controllers\Task\TaskController;
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

Route::get('/', function () {
    return 'It Works';
});

Route::prefix('tasks/')->group(function () {
    Route::get('index', [TaskController::class, 'getAll']);
    Route::post('create', [TaskController::class, 'store']);
});
