<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

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
Route::get('/scrap/provider', [GameController::class, 'getProvider']);
Route::get('/scrap/games', [GameController::class, 'getProviderGames']);
Route::get('/', function () {
    return view('welcome');
});
