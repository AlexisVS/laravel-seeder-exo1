<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UsersController::class, "index"]);
Route::get('/user/create', [UsersController::class, 'create']);
Route::post('/user/store', [UsersController::class, 'store']);
Route::get('/user/{id}', [UsersController::class, "show"]);
Route::get('/user/{id}/edit', [UsersController::class, "edit"]);
Route::put('/user/{id}/update', [UsersController::class, "update"]);

Route::delete('/user/{id}/delete', [UsersController::class, "destroy"]);
Route::delete('/user/delete-all', [UsersController::class, "destroyAll"]);
