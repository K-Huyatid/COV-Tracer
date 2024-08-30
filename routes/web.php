<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovidController;
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

Route::post("region", [CovidController::class, 'region_request'])->name('cityOption');

Route::get('/', [CovidController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});