<?php

use App\Http\Controllers\Admin\AboutmeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\BlogAdminContorller;
use App\Http\Controllers\admin\BlogCategoryContorller;
use App\Http\Controllers\Admin\QualificationController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Blogs\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Blogs\BlogCommentController;
use App\Http\Controllers\Blogs\NewsletterController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

// Front-End Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project/{id}', [ProjectController::class, 'index'])->name('project');

// Route::prefix('/my-blogs')->name('blogs')->group(function(){
//     Route::get('/', [BlogController::class, 'index'])->name('blog');
//     Route::get('/category/{title}', [BlogController::class, 'categoryView'])->name('category');
//     Route::get('/post', [BlogController::class, 'postView'])->name('post');

// });


Route::get('/my-blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/my-blogs/all-blogs', [BlogController::class, 'allBlogs'])->name('blogs.allBlogs');
Route::get('/my-blogs/featured-blogs', [BlogController::class, 'featuredBlogs'])->name('blogs.featuredBlogs');
Route::get('/my-blogs/latest-blogs', [BlogController::class, 'latestBlogs'])->name('blogs.latestBlogs');
Route::get('/my-blogs/categories',[BlogController::class, 'blogCategories'])->name('blogs.categories');
Route::get('/my-blogs/popular-categories',[BlogController::class, 'popularCategories'])->name('blogs.popularCategories');
Route::get('/my-blogs/category/{title}', [BlogController::class, 'categoryView'])->name('blogs.category');
Route::get('/my-blogs/post/{id}', [BlogController::class, 'postView'])->name('blogs.post');
Route::post('/my-blogs/subscribe', [NewsletterController::class, 'subscribe'])->name('blogs.subscribe');
Route::post('/my-blogs/un-subscribe', [NewsletterController::class, 'unsubscribe'])->name('blogs.unsubscribe');
Route::get('/my-blogs/un-subscribeConfirmation/{email}', [NewsletterController::class, 'unsubscribeView'])->name('blogs.unsubscribeView');
Route::get('/my-blogs/search', [BlogController::class, 'searchBlogs'])->name('blogs.search');
// blog comments routes
Route::post('/my-blogs/post/comment/{id}/{replyId}',[BlogCommentController::class, 'store'])->name('blogs.comment');



Route::post('/contact', [ContactController::class, 'submit'])->name('contact');

//Admin Panel
Route::middleware(['auth','isAdmin'])->name('admin.')->prefix('/admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/qualification/education', [QualificationController::class,'showEducation'])->name('qualification.edu');
    Route::get('/qualification/experience', [QualificationController::class,'showExperience'])->name('qualification.exp');
    Route::resource('/qualification', QualificationController::class);
    Route::resource('/skill', SkillController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/category', CategoryController::class);
    Route::get('/portfolio/search', [PortfolioController::class,'search'])->name('portfolio.search');
    Route::resource('/portfolio', PortfolioController::class);
    Route::resource('/aboutme', AboutmeController::class);
    Route::resource('/setting', SettingController::class);

    Route::resource('/blog-category', BlogCategoryContorller::class);
    Route::get('/blogs/search', [BlogAdminContorller::class,'search'])->name('blog.search');
    Route::resource('/blogs', BlogAdminContorller::class);
});

Auth::routes();
