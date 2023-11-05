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
 Route::get('/form', [HomeController::class,'form']);
 Route::post('/store', [HomeController::class,'store']);

 Route::get('/researcher/list', [ResearcherController::class, 'researcher'])->name('researcher.list');
 Route::get('/researcher/form', [ResearcherController::class, 'researcherForm'])->name('researcher.form');
 Route::post('/researcher/store', [ResearcherController::class, 'store'])->name('researcher.store');

 Route::get('/project/list', [ProjectController::class, 'project'])->name('project.list');
 Route::get('/project/form', [ProjectController::class, 'projectForm'])->name('project.form');
 Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');

 Route::get('/paper/list', [PaperController::class, 'paper'])->name('paper.list');
 Route::get('/paper/form', [PaperController::class, 'paperForm'])->name('paper.form');
 Route::post('/paper/store', [PaperController::class, 'store'])->name('paper.store');

 Route::get('/report/list', [ReportController::class, 'report'])->name('report.list');
 Route::get('/report/form', [ReportController::class, 'reportForm'])->name('report.form');
 Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');

 Route::get('/sponsor/list', [SponsorController::class, 'sponsor'])->name('sponsor.list');
 Route::get('/sponsor/form', [SponsorController::class, 'sponsorForm'])->name('sponsor.form');
 Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');

 Route::get('/category/list', [CategoryController::class, 'category'])->name('category.list');
 Route::get('/category/form', [CategoryController::class, 'categoryForm'])->name('catgeory.form');
 Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');