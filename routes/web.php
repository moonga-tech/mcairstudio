<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CreateBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



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

/* -- routing pages -- */
Route::controller(AppController::class)->group(function() {
    Route::get('/test', [AppController::class, 'test'])->name('test');

    
    Route::get('/services', [AppController::class, 'services'])->name('services');
    Route::get('/about', [AppController::class, 'about'])->name('about');
    Route::get('/privacy-policy', [AppController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/contact-us', [AppController::class, 'contact'])->name('contact');
    Route::post('/contact-us', [AppController::class, 'contactPost']);
    Route::get('/projects', [AppController::class, 'projects'])->name('projects');
    Route::get('/blogs', [AppController::class, 'blogs'])->name('blogs');
    Route::get('/blogs/{id}', [AppController::class, 'blogID'])->name('blogID');
    /* -- music-class -- */
    Route::controller(AppController::class)->group(function() {
        Route::get('/course', [AppController::class, 'course'])->name('course')->middleware('auth');    
    });
});
/* -- authenticated users -- */
Route::middleware('auth')->group(function() {
    Route::get('/create-blog', [CreateBlogController::class, 'createBlog'])->name('createBlog');
    Route::post('/create-blog', [CreateBlogController::class, 'postBlog']);
});
//Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class, 'userHome'])->name("home");
});
// ****** Route Admin ****** //
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
    Route::get("/admin/view-blog",[AdminController::class, 'viewBlog'])->name("viewBlog");
    Route::get('/admin/update-blog/{id}', [AdminController::class, 'updateBlog'])->name('updateBlog');
    Route::put('/admin/update-blog/{id}', [CreateBlogController::class, 'updateBlogContent']);
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
