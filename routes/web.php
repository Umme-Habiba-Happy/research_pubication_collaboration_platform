<?php

 use Illuminate\Support\Facades\Route;
 use App\Http\controllers\HomeController;
 use App\Http\controllers\ResearcherController;
 use App\Http\controllers\ProjectController;
 use App\Http\controllers\PaperController;
 use App\Http\controllers\CategoryController;
 use App\Http\controllers\ReportController;
 use App\Http\controllers\SponsorController;


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

 Route::get('/', [HomeController::class,'home']);
 Route::get('/researcher/list', [ResearcherController::class, 'researcher']);
 Route::get('/project/list', [ProjectController::class, 'project']);
 Route::get('/paper/list', [PaperController::class, 'paper']);
 Route::get('/report/list', [ReportController::class, 'report']);
 Route::get('/sponsor/list', [SponsorController::class, 'sponsor']);
 Route::get('/category/list', [CategoryController::class, 'category']);


