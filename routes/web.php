<?php

use App\Http\Controllers\UserController;

use App\Http\Controllers\AyudaController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\RotuladoController;

use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\AspectoController;
use \App\Http\Controllers\StructureController;
use \App\Http\Controllers\LayoutpageController;
use \App\Http\Controllers\ControlController;
use \App\Http\Controllers\SearchController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeamController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', UserController::class);

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

//Formularios
Route::resource('aspectos.projects', AspectoController::class);
Route::resource('identitys.projects', IdentityController::class);
Route::resource('interactions.projects', InteractionController::class);
Route::resource('controls.projects', ControlController::class);
Route::resource('elements.projects', ElementController::class);
Route::resource('searchs.projects', SearchController::class);
Route::resource('ayudas.projects', AyudaController::class);
Route::resource('evaluations.projects', EvaluationController::class);
Route::resource('structures.projects', StructureController::class);
Route::resource('rotulados.projects', RotuladoController::class);
Route::resource('layoutpages.projects', LayoutpageController::class);

Route::resource('help', HelpController::class);
Route::resource('teams', TeamController::class);
Route::resource('projects', ProjectController::class);

Route::resource('projects.teams', ProjectController::class);


Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('evaluators', EvaluatorController::class);


Route::get('teams-pdf', 'TeamsController@exportPDF')->name('teams.pdf');
Route::get('students-pdf', 'StudentsController@exportPDF')->name('students.pdf');
Route::get('teachers-pdf', 'TeachersController@exportPDF')->name('students.pdf');
Route::get('evaluators-pdf', 'EvaluatorsController@exportPDF')->name('students.pdf');
