<?php

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

//Route::get('/dash/crud','App\Http\Controllers\DashController@index');
Route::get('dash/admin/transit_guide','App\Http\Controllers\DashController@transit_guide');
Route::get('dash/admin/technical_data','App\Http\Controllers\DashController@technical_data');
Route::get('dash/admin/production','App\Http\Controllers\DashController@production');
Route::get('dash/admin/mining_producers','App\Http\Controllers\DashController@mining_producers');
//Route::get('dash/admin/statistical_graph','App\Http\Controllers\DashController@statisticalGraph');
