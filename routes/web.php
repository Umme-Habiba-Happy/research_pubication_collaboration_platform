<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\UsersController;
use App\Http\controllers\FrontendHomeController;

 use Illuminate\Support\Facades\Route;
 use App\Http\controllers\Backend\UserController;

 use App\Http\controllers\Backend\ResearcherController;
 use App\Http\controllers\Backend\ProjectController;
 use App\Http\controllers\Backend\PaperController;
 use App\Http\controllers\Backend\CategoryController;
 use App\Http\controllers\Backend\ReportController;
 use App\Http\controllers\Backend\SponsorController;

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
//frontend routes

Route::get('/',[FrontendHomeController::class, 'home'])->name('homepage');


//admin routes
Route::group(['prefix'=> 'admin'],function(){
   Route::get('admin/login', [UserController::class,'loginForm'])->name('admin.login');

   Route::post('login/store', [UserController::class,'loginStore'])->name('login.store');
 Route::group(['middleware'=> 'auth'],function(){

    Route::get('admin/logout', [UserController::class,'logout'])->name('admin.logout');
    Route::get('/', [HomeController::class,'home'])->name('dashboard');

    Route::get('/users/list' , [ UserController::class, 'list'])->name('users.list');
    Route::get('/users/form',[UserController::class, 'form'])->name('users.form');
    Route::post('/users/store',[UserController::class, 'store'])->name('users.store');

    Route::get('/role/list' , [RoleController::class, 'role'])->name('role.list');
    Route::get('/role/form' , [RoleController::class, 'form'])->name('role.form');


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
 });

});
 