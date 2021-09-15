<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\HomepageController;

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

Route::get('/', [HomepageController::class, 'index']);
Route::get('/pizza', [ShopController::class, 'pizza']);
Route::get('/drinks', [ShopController::class, 'drinks']);
Route::get('/bbq', [ShopController::class, 'bbq']);
Route::get('/product/{slug}', [ShopController::class, 'show']);

Route::get('/addons', [ShopController::class, 'addons']);
Route::get('/addonOptions', [ShopController::class, 'addonOptions']);
