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
Route::prefix('/cdash/management')->group(function(){
  Auth::routes([
      'register' => true,
      'verify' => true,
      'reset' => false
  ]);

}); 

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

  Route::middleware(["auth"])->prefix('/cdash')->group(function(){
  Route::get("/lexicon", [DashboardController::class, "lexicon"])->name("lexicon");
  Route::get("/lexicon/{query}", [DashboardController::class, "lexicon_query_letter"])->name("lexicon_query_letter");
  Route::get("/display-lexicon-create", [DashboardController::class, "display_create"])->name('display-create');
  Route::get("/display-lexicon-sense-create", [DashboardController::class, "display_sense_create"])->name('display-sense-create');
  Route::get("/management/changelog", [DashboardController::class, "display_changelog"])->name('display-changelog')->middleware('role:administrator');
  Route::get("/management/users", [DashboardController::class, "display_users"])->name('display-users')->middleware('role:administrator');
});
// Lexicon-specific routes within dashboard

// Route::any("/query-lexicon-letters", [QueryLexiconController::class, "index"])->name("query-lexicon-letters")->middleware('auth');
Route::middleware(["auth", "XSS"])->prefix('/cdash')->group(function(){
Route::post("/search-lexicon", [QueryLexiconController::class, "search"])->name("search-lexicon");
Route::get("/display-searchlexicon", [QueryLexiconController::class, "display_search"])->name("display-lexicon");
Route::post("/validate-lexicon-entry", [QueryLexiconController::class, "validate_entry"])->name("validate-entry");
Route::post("/create-lexicon-entry", [QueryLexiconController::class, "create_entry"])->name("create-entry");
Route::post("/update-lexicon-entry", [QueryLexiconController::class, "update_entry"])->name("update-entry");
Route::post("/create-lexicon-sense-entry", [QueryLexiconController::class, "create_sense_entry"])->name("create-sense-entry");
Route::post("/delete-sense-from-entry", [QueryLexiconController::class, "delete_sense"])->name("delete-sense-entry");
});

// RBAC managed by Laratrust; edited from vendor package Laratrust.

// Route::resource('/permissions', 'PermissionsController', ['as' => 'laratrust'])
//     ->only(['index', 'edit', 'update'])->middleware('role:admin');

// Route::resource('/roles', 'RolesController', ['as' => 'laratrust'])->middleware('role:admin');

// Route::resource('/roles-assignment', 'RolesAssignmentController', ['as' => 'laratrust'])
//     ->only(['index', 'edit', 'update'])->middleware('role:admin');

/****************************************************************** */

// Public Dictionary Routes
// Route::post('/public-dictionary', [QueryPublicDictionaryController::class, 'index'])->name('querypubdict');