<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;

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



Auth::routes();
Route::get('/',[IndexController::class,'index'])->name('index')->name('index');
Route::post('/story-form',[IndexController::class,'home'])->name('save-contact');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about')->name('about');
Route::get('/admin',[AdminController::class,'index'])->name('admin')->name('admin');
Route::get('/post',[PostController::class,'post'])->name('post');
Route::post('/story',[PostController::class,'story'])->name('add-post');
Route::get('/project',[ProjectController::class,'index'])->name('project');



