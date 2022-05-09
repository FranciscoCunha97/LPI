<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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
    return view('welcome');
})->name('pages.welcome');

Route::get('/search',[SearchController::class,'search'])->name('pages.search');

Route::get('/searchAll',[SearchController::class,'searchAll'])->name('pages.searchAll');

Route::get('/curriculum/{CienciaVitaeId}',[SearchController::class,'curriculumId'])->name('pages.curriculum');
