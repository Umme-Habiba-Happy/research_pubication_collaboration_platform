<?php

use App\Http\Controllers\Frontend\FrontendUserController;
use App\Http\Controllers\Frontend\FrontendResearchController;


 use App\Http\Controllers\AdminController;
 use App\Http\Controllers\UsersController;
 use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
 use App\Http\Controllers\Frontend\SponsorController as FrontendSponsorController;

 use App\Http\Controllers\Backend\HomeController;
 use App\Http\Controllers\Backend\RoleController;
 use App\Http\controllers\Frontend\FrontendHomeController;

 use Illuminate\Support\Facades\Route;
 use App\Http\controllers\Backend\UserController;

 use App\Http\controllers\Backend\ResearcherController;
 use App\Http\controllers\Backend\ProjectController;
 use App\Http\controllers\Backend\PaperController;
 use App\Http\controllers\Backend\CategoryController;
 use App\Http\controllers\Backend\ReportController;
 use App\Http\controllers\Backend\SponsorController;
 use App\Http\Controllers\Frontend\MasterController;

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

Route::get('/home',[FrontendHomeController::class, 'home'])->name('homepage');
Route::get('/search',[FrontendHomeController::class, 'search'])->name('search');

Route::get('/slider', [FrontendHomeController::class, 'slider'])->name('slider');
Route::get('/login',[FrontendUserController::class, 'login'])->name('user.login');
Route::post('/dologin',[FrontendUserController::class, 'doLogin'])->name('user.do-login');


Route::get('/registration',[FrontendUserController::class, 'registration'])->name('user.registration');
Route::post('/registration',[FrontendUserController::class, 'doRegistration'])->name('user.do-registration');




Route::get('/category/list',[FrontendCategoryController::class, 'category'])->name('category');
Route::get('/',[MasterController::class, 'master'])->name('master');
Route::get('/sponsor',[FrontendSponsorController::class, 'sponsor'])->name('sponsor');

Route::group(['middleware'=> 'auth'], function(){

Route::get('/logout', [FrontendUserController::class, 'logout'])->name('user.logout');
Route::get('/profile', [FrontendUserController::class, 'profile'])->name('Profile');
Route::get('/edit/{id}',[FrontendUserController::class, 'edit'])->name('edit');
Route::put('/profile/update/{id}',[FrontendUserController::class, 'update'])->name('profile.update');
Route::get('/mypost', [FrontendUserController::class,'mypost'])->name('researcher.post');
Route::get('/mypost/form', [FrontendUserController::class,'postForm'])->name('researcher.post.form');
Route::post('/mypost/store', [FrontendUserController::class,'postStore'])->name('researcher.postStore');


Route::get('/research' , [FrontendResearchController::class, 'research'])->name('research');
Route::get('/singleResearchView', [FrontendResearchController::class, 'singleResearch'])->name('singleResearchView');
Route::get('/secondResearch', [FrontendResearchController::class, 'secondResearch'])->name('secondResearchView');
Route::get('/thirdResearch', [FrontendResearchController::class, 'thirdResearch'])->name('thirdResearchView');

});


//admin routes
Route::group(['prefix'=> 'admin'],function(){
   Route::get('admin/login', [UserController::class,'loginForm'])->name('admin.login');

   Route::post('login/store', [UserController::class,'loginStore'])->name('login.store');
   
 Route::group(['middleware'=> 'auth'],function(){
   Route::group(['middleware'=> 'checkAdmin'],function(){


    Route::get('admin/logout', [UserController::class,'logout'])->name('admin.logout');
    Route::get('/', [HomeController::class,'home'])->name('dashboard');

    Route::get('/users/list' , [ UserController::class, 'list'])->name('users.list');
    Route::get('/users/form',[UserController::class, 'form'])->name('users.form');
    Route::post('/users/store',[UserController::class, 'store'])->name('users.store');
    Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');


    Route::get('/role/list' , [RoleController::class, 'role'])->name('role.list');
    Route::get('/role/form' , [RoleController::class, 'form'])->name('role.form');


    Route::get('/researcher/list', [ResearcherController::class, 'researcher'])->name('researcher.list');
    Route::get('/researcher/form', [ResearcherController::class, 'researcherForm'])->name('researcher.form');
    Route::post('/researcher/store', [ResearcherController::class, 'store'])->name('researcher.store');
   
    Route::get('/project/list', [ProjectController::class, 'project'])->name('project.list');
    Route::get('/project/form', [ProjectController::class, 'projectForm'])->name('project.form');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/view', [ProjectController::class, 'viewPost'])->name('project.viewPost');

   
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
    Route::get('/category/form', [CategoryController::class, 'categoryForm'])->name('category.form');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
 });

});
});

 