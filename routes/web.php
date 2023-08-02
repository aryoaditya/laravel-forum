<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussController;

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

Route::get('discussions', [DiscussController::class, 'index']);
Route::get('discussions/create', [DiscussController::class, 'create']);
Route::post('discussions', [DiscussController::class, 'store']);
Route::get('discussions/{id}', [DiscussController::class, 'show']);
Route::get('discussions/{id}/edit', [DiscussController::class, 'edit']);
Route::patch('discussions/{id}', [DiscussController::class, 'update']);
Route::delete('discussions/{id}', [DiscussController::class, 'destroy']);