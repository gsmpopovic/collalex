<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers; 
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\ContributeController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\LanController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\FVController;
use App\Http\Controllers\QueryPublicDictionaryController;



use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QueryLexiconController;

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

// Route::group(['middleware' => ['role:administrator']], function() {
//     Auth::routes();
// });

Auth::routes();

Route::get("/", [WelcomeController::class, "index"]);
// Route::get("/about", [AboutController::class, "index"])->name("about");
// Route::get("/contribute", [ContributeController::class, "index"])->name("contribute");
// Route::get("/suggest", [SuggestionController::class, "index"])->name("suggest");
// Route::get("/facesandvoices", [FVController::class, "index"])->name("facesandvoices");
// Route::get("/language", [LanController::class, "index"])->name("language");



Route::get("/dictionary", [DictionaryController::class, "index"])->name("dictionary");

// Route::get('/cdash/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
/****************************************************************** */ 
// Dashboard routes 

Route::get("/cdash", [DashboardController::class, "index"])->name("dash")->middleware('auth');
Route::get("/cdash/lexicon", [DashboardController::class, "lexicon"])->name("lexicon")->middleware('auth');

Route::any("/query-lexicon", [QueryLexiconController::class, "index"])->name("query-lexicon")->middleware('auth');
// RBAC managed by Laratrust; edited from vendor package Laratrust.


// Route::resource('/permissions', 'PermissionsController', ['as' => 'laratrust'])
//     ->only(['index', 'edit', 'update'])->middleware('role:admin');

// Route::resource('/roles', 'RolesController', ['as' => 'laratrust'])->middleware('role:admin');

// Route::resource('/roles-assignment', 'RolesAssignmentController', ['as' => 'laratrust'])
//     ->only(['index', 'edit', 'update'])->middleware('role:admin');

/****************************************************************** */
// Public Dictionary Routes
Route::post('/public-dictionary', [QueryPublicDictionaryController::class, 'index'])->name('querypubdict');