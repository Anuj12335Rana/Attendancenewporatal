<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserdashboardController;

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


Route::get('/', [UserdashboardController::class, 'index']);


// route for user dashborad close 


