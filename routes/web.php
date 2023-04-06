<?php

use App\Http\Controllers\TasksController;
use App\http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);

Route::get('Cloudsch', [TasksController::class, 'index']);
Route::get('Cloudsch/create', [TasksController::class, 'create']);

Route::post('Cloudsch', [TasksController::class, 'store']);
Route::patch('Cloudsch/{id}', [TasksController::class, 'update']);
Route::get('Cloudsch/{id}/edit', [TasksController::class, 'edit']);
Route::delete('Cloudsch/{id}', [TasksController::class, 'destroy']);
