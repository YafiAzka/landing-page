<?php

use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;


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

Route::get('/', [SliderController::class, 'index']);

Route::get('/news', [SliderController::class, 'show'])->name('newsPage');
