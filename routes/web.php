<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers; 
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\ContributeController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\LanController;


use App\Http\Controllers\DashboardController; 



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [WelcomeController::class, "index"]);
Route::get("/about", [AboutController::class, "index"])->name("about");
Route::get("/contribute", [ContributeController::class, "index"])->name("contribute");
Route::get("/suggest", [SuggestionController::class, "index"])->name("suggest");
Route::get("/facesandvoices", [FVController::class, "index"])->name("facesandvoices");
Route::get("/language", [LanController::class, "index"])->name("language");



Route::get("/dictionary", [DictionaryController::class, "index"])->name("dictionary");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard routes 

Route::get("/cdash", [DashboardController::class, "index"])->name("dash");
Route::get("/cdash/lexicon", [DashboardController::class, "lexicon"])->name("lexicon");

// RBAC managed by Laratrust; see vendor package Laratrust.


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
