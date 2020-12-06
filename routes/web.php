<?php

use App\Http\Controllers\AyudaController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\RotuladoController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\AspectoController;
use \App\Http\Controllers\StructureController;
use \App\Http\Controllers\LayoutpageController;
use \App\Http\Controllers\ControlController;
use \App\Http\Controllers\SearchController;

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
