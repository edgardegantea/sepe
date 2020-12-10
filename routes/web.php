<?php

use App\Http\Controllers\AyudaController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\EvaluatorsController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RotuladoController;

use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\AspectoController;
use \App\Http\Controllers\StructureController;
use \App\Http\Controllers\LayoutpageController;
use \App\Http\Controllers\ControlController;
use \App\Http\Controllers\SearchController;

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\TeamsController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('proyectos', ProjectController::class);
Route::resource('aspectos', AspectoController::class);
Route::resource('structures', StructureController::class);
Route::resource('layoutpages', LayoutpageController::class);
Route::resource('controls', ControlController::class);
Route::resource('searchs', SearchController::class);
Route::resource('evaluations', EvaluationController::class);
Route::resource('ayudas', AyudaController::class);
Route::resource('elements', ElementController::class);
Route::resource('identitys', IdentityController::class);
Route::resource('interactions', InteractionController::class);
Route::resource('rotulados', RotuladoController::class);

Route::resource('help', HelpController::class);
Route::resource('teams', TeamsController::class);
Route::resource('projects', ProjectsController::class);
Route::resource('teachers', TeachersController::class);
Route::resource('students', StudentsController::class);
Route::resource('subjects', SubjectsController::class);
Route::resource('evaluators', EvaluatorsController::class);


Route::get('teams-pdf', 'TeamsController@exportPDF')->name('teams.pdf');
Route::get('students-pdf', 'StudentsController@exportPDF')->name('students.pdf');
Route::get('teachers-pdf', 'TeachersController@exportPDF')->name('students.pdf');
Route::get('evaluators-pdf', 'EvaluatorsController@exportPDF')->name('students.pdf');
