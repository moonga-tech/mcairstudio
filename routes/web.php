<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
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

Route::get("/sitemap.xml", function () {
return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
});

Route::get('/', function () {
    return view('welcome');
});

/* -- routing pages -- */
Route::controller(AppController::class)->group(function() {
    /* Route::get('/test', [AppController::class, 'test'])->name('test'); */

    /* header pages */
    Route::get('/services', [AppController::class, 'services'])->name('services');
    Route::get('/about', [AppController::class, 'about'])->name('about');
    Route::get('/contact-us', [AppController::class, 'contact'])->name('contact');
    Route::post('/contact-us', [AppController::class, 'contactPost']);
    Route::get('/projects', [AppController::class, 'projects'])->name('projects');
    Route::get('/blogs', [AppController::class, 'blogs'])->name('blogs');
    Route::get('/blogs/{id}', [AppController::class, 'blogShow'])->name('blogShow');
    Route::get('/privacy-policy', [AppController::class, 'privacyPolicy'])->name('privacyPolicy');
    Route::get('/terms-and-conditions', [AppController::class, 'termsAndConditions'])->name('termsAndConditions');

    /* footer pages */
    Route::get('/mcair/github-repo', [AppController::class, 'githubRepo'])->name('githubRepo');
    Route::get('/mcair/music-cloud', [AppController::class, 'musicCloudPage'])->name('musicCloudPage');
    Route::get('/behance-content', [AppController::class, 'behancePage'])->name('behancePage');
    Route::get('/services/prices', [AppController::class, 'pricingPage'])->name('pricingPage');
    Route::get('/code/reactjs', [AppController::class, 'codeReactjs'])->name('code.reactjs');

    /* -- music-class -- */
    Route::controller(AppController::class)->group(function() {
        Route::get('/course', [AppController::class, 'course'])->name('course')->middleware('auth');    
    });
});
/* -- authenticated users -- */
Route::middleware('auth')->group(function() {
    Route::get('/create-blog', [BlogController::class, 'createBlog'])->name('createBlog');
    Route::post('/create-blog', [BlogController::class, 'postBlog']);
});
//Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class, 'userHome'])->name("home");
});

// ****** Route Admin ****** //
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[AdminController::class, 'adminHome'])->name("admin.home");
    Route::post("/admin/home",[AdminController::class, 'adminCreateBlog']);
    Route::get("/admin/view-blog",[AdminController::class, 'viewBlog'])->name("viewBlog");
    Route::get('/admin/update-blog/{id}', [AdminController::class, 'updateBlog'])->name('updateBlog');
    Route::put('/admin/update-blog/{id}', [AdminController::class, 'updateBlogContent']);
    Route::get('/admin/messages', [AdminController::class, 'messages'])->name('messages');
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
