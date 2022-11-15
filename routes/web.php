<?php

use App\Models\Gslc;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GslcController;

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


Route::get('/gslc', [GslcController::class, 'index']);


Route::get('/gslc/{slug}', [GslcController::class, 'show']);
