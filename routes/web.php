<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserviewController;


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
    Route::get('/services', [AppController::class, 'services'])->name('services');
    Route::get('/about', [AppController::class, 'about'])->name('about');
    Route::get('/privacy-policy', [AppController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/contact-us', [AppController::class, 'contact'])->name('contact');
    Route::post('/contact-us', [AppController::class, 'contactPost']);
    Route::get('/projects', [AppController::class, 'projects'])->name('projects');
    Route::get('/blogs', [AppController::class, 'blogs'])->name('blogs');
    /* -- music-class -- */
    Route::controller(AppController::class)->group(function() {
        Route::get('/course', [AppController::class, 'course'])->name('course')->middleware('auth');    
    });
});
/* -- -- */
Route::middleware('auth')->controller('UserviewController::class')->group(function() {
    Route::get('/blogs-create', [UserviewController::class, 'createBlog'])->name('createBlog');
    Route::post('/blogs-create', [UserviewController::class, 'postBlog']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
