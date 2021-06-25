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

// Auth::routes();

Auth::routes([
    'register' => true,
    'verify' => true,
    'reset' => false
  ]);

Route::get("/", [WelcomeController::class, "index"]);
// Route::get("/about", [AboutController::class, "index"])->name("about");
// Route::get("/contribute", [ContributeController::class, "index"])->name("contribute");
// Route::get("/suggest", [SuggestionController::class, "index"])->name("suggest");
// Route::get("/facesandvoices", [FVController::class, "index"])->name("facesandvoices");
// Route::get("/language", [LanController::class, "index"])->name("language");



// Route::get("/dictionary", [DictionaryController::class, "index"])->name("dictionary");

// Route::get('/cdash/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
/****************************************************************** */ 
// Dashboard routes 

Route::get("/cdash", [DashboardController::class, "index"])->name("dash")->middleware('auth');
Route::get("/cdash/lexicon", [DashboardController::class, "lexicon"])->name("lexicon")->middleware('auth');
Route::get("/cdash/lexicon/{query}", [DashboardController::class, "lexicon_query_letter"])->name("lexicon_query_letter")->middleware('auth');

Route::get("/display-lexicon-create", [DashboardController::class, "display_create"])->name('display-create')->middleware('auth');

Route::get("/display-lexicon-sense-create", [DashboardController::class, "display_sense_create"])->name('display-sense-create')->middleware('auth');
Route::get("/changelog", [DashboardController::class, "display_changelog"])->name('display-changelog')->middleware('auth');

// Lexicon routes 

// Route::any("/query-lexicon-letters", [QueryLexiconController::class, "index"])->name("query-lexicon-letters")->middleware('auth');

Route::post("/search-lexicon", [QueryLexiconController::class, "search"])->name("search-lexicon")->middleware('auth');

Route::get("/display-searchlexicon", [QueryLexiconController::class, "display_search"])->name("display-lexicon")->middleware('auth');

Route::post("/validate-lexicon-entry", [QueryLexiconController::class, "validate_entry"])->name("validate-entry")->middleware('auth');

Route::post("/create-lexicon-entry", [QueryLexiconController::class, "create_entry"])->name("create-entry")->middleware('auth');

Route::post("/update-lexicon-entry", [QueryLexiconController::class, "update_entry"])->name("update-entry")->middleware('auth');

Route::post("/create-lexicon-sense-entry", [QueryLexiconController::class, "create_sense_entry"])->name("create-sense-entry")->middleware('auth');

Route::post("/delete-sense-from-entry", [QueryLexiconController::class, "delete_sense"])->name("delete-sense-entry")->middleware('auth');


// RBAC managed by Laratrust; edited from vendor package Laratrust.


// Route::resource('/permissions', 'PermissionsController', ['as' => 'laratrust'])
//     ->only(['index', 'edit', 'update'])->middleware('role:admin');

// Route::resource('/roles', 'RolesController', ['as' => 'laratrust'])->middleware('role:admin');

// Route::resource('/roles-assignment', 'RolesAssignmentController', ['as' => 'laratrust'])
//     ->only(['index', 'edit', 'update'])->middleware('role:admin');

/****************************************************************** */

// Public Dictionary Routes
// Route::post('/public-dictionary', [QueryPublicDictionaryController::class, 'index'])->name('querypubdict');