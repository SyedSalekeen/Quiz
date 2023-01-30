<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\FrontendController;


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


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login_submit', [LoginController::class, 'login_submit'])->name('login_submit');





// authenticated routes are in middelware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashbordController::class, 'index'])->name('dasboard');
    // Category routes
    Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('create-category', [CategoryController::class, 'create'])->name('create_category');
    Route::post('store_category', [CategoryController::class, 'store'])->name('store_category');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('edit_category');
    Route::put('update_category/{id}', [CategoryController::class, 'update'])->name('update_category');
    Route::get('delete_category/{id}', [CategoryController::class, 'delete'])->name('delete_category');


    // questions
    Route::get('question',[QuestionController::class, 'index'])->name('questions');
    Route::get('add-question',[QuestionController::class, 'create'])->name('add_question');
    Route::post('store_question',[QuestionController::class, 'store'])->name('store_question');


    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

});

Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('download-file',[FrontendController::class, 'download_file']);

Route::get('download-files',[FrontendController::class, 'download_files']);

Route::get("pdfview",[FrontendController::class, 'pdfview'])->name('pdfview');
Route::post('submit_quiz',[FrontendController::class, 'submit_quiz'])->name('submit_quiz');



