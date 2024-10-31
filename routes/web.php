<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [ProjectController::class, 'index']);
Route::get("/projects", [ProjectController::class, 'all'])->name('projects');
Route::get("/project/search", [ProjectController::class, 'search'])->name('project.search');
