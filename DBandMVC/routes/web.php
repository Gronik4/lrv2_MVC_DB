<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoCreateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo', [TodoCreateController::class, 'index']);
Route::get('/todo/id', [TodosController::class, 'findRecord']);
Route::get('/todo/create', [TodoCreateController::class, 'create']);
Route::post('/todo/post', [TodoCreateController::class, 'store']);
