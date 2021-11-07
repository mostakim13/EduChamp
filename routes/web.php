<?php

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

use App\Http\Controllers\EduChampController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EduChampController::class, 'front']);
Route::get('/courseDetail/{id}', [EduChampController::class, 'course_detail']);
Route::get('/user_profile', [EduChampController::class, 'user_profile']);
Route::get('/teacher_profile', [EduChampController::class, 'teacher_profile']);
Route::get('/mail_box', [EduChampController::class, 'mailBox']);


Route::get('/dashboard', [EduChampController::class, 'index'])->name('dashboard');
Route::get('/courses', [EduChampController::class, 'show']);
Route::get('/addDetail', [EduChampController::class, 'addData']);

Route::get('/delete/{id}', [EduChampController::class, 'destroy'])->name('delete');
Route::get('/editData/{data}', [EduChampController::class, 'edit']);
Route::post('/storeDetail', [EduChampController::class, 'store'])->name('storeDetail');
Route::post('/updateDetail/{id}', [EduChampController::class, 'update'])->name('updateDetail');
