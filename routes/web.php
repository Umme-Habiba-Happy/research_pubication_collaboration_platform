<?php

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\FrontendPostController;
use App\Http\Controllers\Frontend\FrontendUserController;
use App\Http\Controllers\Frontend\FrontendResearchController;
use App\Http\Controllers\Frontend\CitationController;


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
use App\Http\Controllers\SslCommerzPaymentController;

 //download function
 

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
Route::post('/api/updateCitationCount', [CitationController::class, 'updateCitationCount']);

Route::get('/',[FrontendHomeController::class, 'home'])->name('homepage');
Route::get('/search',[FrontendHomeController::class, 'search'])->name('search');

Route::get('/slider', [FrontendHomeController::class, 'slider'])->name('slider');
Route::get('/login',[FrontendUserController::class, 'login'])->name('user.login');
Route::post('/dologin',[FrontendUserController::class, 'doLogin'])->name('user.do-login');


Route::get('/registration',[FrontendUserController::class, 'registration'])->name('user.registration');
Route::post('/registration',[FrontendUserController::class, 'doRegistration'])->name('user.do-registration');





// Route::get('/',[MasterController::class, 'master'])->name('master');

Route::group(['middleware'=> 'auth'], function(){

   // SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::get('/logout', [FrontendUserController::class, 'logout'])->name('user.logout');
Route::get('/profile', [FrontendUserController::class, 'profile'])->name('Profile');

Route::get('/edit/{id}',[FrontendUserController::class, 'edit'])->name('edit');
Route::put('/profile/update/{id}',[FrontendUserController::class, 'update'])->name('profile.update');
Route::get('/profile/profile', [FrontendUserController::class, 'userProfile'])->name('profile.profile');
Route::get('/profile/research', [FrontendUserController::class, 'userResearch'])->name('profile.research');
Route::get('/profile/stats', [FrontendUserController::class, 'stats'])->name('profile.stats');
Route::delete('/delete/post/{id}', [FrontendUserController::class, 'deletePost'])->name('delete.post');

Route::get('/author/viewProfile/{id}', [FrontendUserController::class, 'authorProfile'])->name('author.viewProfile');

Route::get('/category/list',[FrontendCategoryController::class, 'category'])->name('category');
Route::get('/research_under_category/{id}',[FrontendCategoryController::class, 'research_under_category'])->name('research_under_category');

// Route::get('/mypost', [FrontendUserController::class,'mypostList'])->name('researcher.post');
// Route::get('/mypost/view/{id}', [FrontendUserController::class,'mypostView'])->name('researcher.post.view');

// Route::get('/mypost/form', [FrontendUserController::class,'postForm'])->name('researcher.post.form');
// Route::post('/mypost/store', [FrontendUserController::class,'postStore'])->name('researcher.postStore');
// Route::get('/resubmit/form', [FrontendUserController::class,'resubmit'])->name('resubmit.form');

Route::get('/mypost', [FrontendPostController::class,'mypostList'])->name('researcher.post');
Route::get('/mypost/edit/{id}', [FrontendPostController::class, 'mypostEdit'])->name('researcher.post.edit');
 Route::put('/mypost/update/{id}', [FrontendPostController::class, 'mypostUpdate'])->name('researcher.post.update');

Route::get('/mypost/view/{id}', [FrontendPostController::class,'mypostView'])->name('researcher.post.view');

Route::get('/mypost/form/{id}', [FrontendPostController::class,'postForm'])->name('researcher.post.form');
Route::post('/mypost/store', [FrontendPostController::class,'postStore'])->name('researcher.postStore');
Route::get('/resubmit/form', [FrontendPostController::class,'resubmit'])->name('resubmit.form');


// Assuming 'research' is the URI segment for your research routes

Route::get('/research/{id}', [FrontendResearchController::class, 'singleResearch'])->name('singleResearchView');
//for download
Route::get('/research/download/{id}', [FrontendResearchController::class, 'single_research_download'])->name('single.research.download');
Route::post('/recommend/{id}', [FrontendResearchController::class, 'recommend'])->name('recommend');


Route::get('/singleView/overview{id}', [FrontendResearchController::class, 'singleResearchOverview'])->name('singleview.overView');

Route::get('/singleView/stats/{id}', [FrontendResearchController::class, 'singleResearchStats'])->name('singleview.stats');

Route::get('/singleView/comment{id}', [FrontendResearchController::class, 'singleViewComment'])->name('singleview.comment');
Route::get('/singleView/cite{id}', [FrontendResearchController::class, 'singleViewCite'])->name('singleview.cite');
Route::get('/research' , [FrontendResearchController::class, 'research'])->name('research');
Route::get('/researchComment' , [FrontendResearchController::class, 'researchComment'])->name('researchComment');

Route::post('/research/{id}/comment', [CommentController::class, 'store'])->name('comment.store');



Route::get('/secondResearch', [FrontendResearchController::class, 'secondResearch'])->name('secondResearchView');
Route::get('/thirdResearch', [FrontendResearchController::class, 'thirdResearch'])->name('thirdResearchView');

});


//admin routes
Route::group(['prefix'=> 'admin'],function(){
   Route::get('admin/login', [UserController::class,'loginForm'])->name('admin.login');

   Route::post('login/store', [UserController::class,'loginStore'])->name('login.store');
   
 Route::group(['middleware'=> 'Admin'],function(){


    Route::get('admin/logout', [UserController::class,'logout'])->name('admin.logout');
    Route::get('/', [HomeController::class,'home'])->name('dashboard');

    Route::get('/users/list' , [ UserController::class, 'list'])->name('users.list');
    Route::delete('/users/delete/{id}', [UserController::class, 'deleteAdmin'])->name('users.delete');

    Route::get('/users/form',[UserController::class, 'form'])->name('users.form');
    Route::post('/users/store',[UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');


    Route::get('/role/list' , [RoleController::class, 'role'])->name('role.list');
    Route::get('/role/form' , [RoleController::class, 'form'])->name('role.form');


    Route::get('/researcher/list', [ResearcherController::class, 'researcher'])->name('researcher.list');
    Route::delete('/researcher/delete/{id}', [ResearcherController::class, 'researcherDelete'])->name('researcher.delete');

    Route::get('/researcher/print', [ResearcherController::class, 'researcherPrint'])->name('researcher.print');

    Route::get('/researcher/form', [ResearcherController::class, 'researcherForm'])->name('researcher.form');
    Route::post('/researcher/store', [ResearcherController::class, 'store'])->name('researcher.store');
    Route::get('/researcher/edit/{id}', [ResearcherController::class, 'edit'])->name('researcher.edit');
    Route::put('/researcher/update/{id}', [ResearcherController::class, 'update'])->name('researcher.update');

    // Route::get('/project/list', [ProjectController::class, 'project'])->name('project.list');
    // Route::get('/project/form', [ProjectController::class, 'projectForm'])->name('project.form');
    // Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    // Route::get('/project/view/{id}', [ProjectController::class, 'viewPost'])->name('project.viewPost');
    // Route::get('/project/approve/{id}', [ProjectController::class, 'postApprove'])->name('project.approve');
    // Route::get('/project/reject/{id}', [ProjectController::class, 'postReject'])->name('project.reject');
    // Route::get('/project/comment/{id}', [ProjectController::class, 'comment'])->name('project.comment');
    Route::get('/project/print', [PostController::class, 'projectPrint'])->name('project.print');

    Route::get('/project/list', [PostController::class, 'project'])->name('project.list');
    Route::get('/project/form', [PostController::class, 'projectForm'])->name('project.form');
    Route::post('/project/store', [PostController::class, 'store'])->name('project.store');
    Route::get('/project/view/{id}', [PostController::class, 'viewPost'])->name('project.viewPost');
    Route::get('/project/approve/{id}', [PostController::class, 'postApprove'])->name('project.approve');
    Route::get('/project/reject/{id}', [PostController::class, 'postReject'])->name('project.reject');
    Route::get('/project/comment/{id}', [PostController::class, 'comment'])->name('project.comment');





    Route::get('/paper/print', [PaperController::class, 'paperPrint'])->name('paper.print');

    Route::get('/paper/list', [PaperController::class, 'paper'])->name('paper.list');
    Route::get('/paper/form', [PaperController::class, 'paperForm'])->name('paper.form');
    Route::post('/paper/store', [PaperController::class, 'store'])->name('paper.store');
   
    Route::get('/report/list', [ReportController::class, 'report'])->name('report.list');
    Route::get('/report/form', [ReportController::class, 'reportForm'])->name('report.form');
    Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');
   
   //  Route::get('/sponsor/list', [SponsorController::class, 'sponsor'])->name('sponsor.list');
   //  Route::get('/sponsor/form', [SponsorController::class, 'sponsorForm'])->name('sponsor.form');
   //  Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');
   
    Route::get('/category/list', [CategoryController::class, 'category'])->name('category.list');
    Route::get('/category/form', [CategoryController::class, 'categoryForm'])->name('category.form');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit', [CategoryController::class, 'categoryEdit'])->name('category.edit');

    Route::delete('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
 });

});


 