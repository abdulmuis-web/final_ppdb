<?php

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

// Route::group(['middleware' => 'auth:api'], function() {
//     Route::resource('/outlets', 'API\OutletController')->except(['show']);
// });

Route::resource('/province', 'ProvinceController')->except(['store','update','destroy','create','edit']);
Route::resource('/city', 'CityController')->except(['store','update','destroy','create','edit']);
Route::resource('/district', 'DistrictController')->except(['store','update','destroy','create','edit']);
Route::resource('/village', 'VillageController')->except(['store','update','destroy','create','edit']);