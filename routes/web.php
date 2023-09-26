<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/students', [App\Http\Controllers\StudentsController::class, 'index'])->name('students');
Route::get('/teachers', [App\Http\Controllers\TeachersController::class, 'index'])->name('teachers');
Route::get('/classes', [App\Http\Controllers\HomeController::class, 'classes'])->name('classes');
Route::get('/Attendance', [App\Http\Controllers\HomeController::class, 'Attendance'])->name('Attendance');
Route::get('/Exams', [App\Http\Controllers\HomeController::class, 'Exams'])->name('Exams');
Route::get('/workers', [App\Http\Controllers\WorkersController::class, 'index'])->name('workers');
Route::get('/dommitory', [App\Http\Controllers\HomeController::class, 'dommitory'])->name('dommitory');
Route::get('/noofclasses', [App\Http\Controllers\HomeController::class, 'noofclasses'])->name('noofclasses');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dorms', [App\Http\Controllers\HomeController::class, 'dorms'])->name('dorms');
Route::get('/lakeview', [App\Http\Controllers\HomeController::class, 'lakeview'])->name('lakeview');
Route::get('/mountainview', [App\Http\Controllers\HomeController::class, 'mountainview'])->name('mountainview');
Route::get('/cityview', [App\Http\Controllers\HomeController::class, 'cityview'])->name('cityview');
Route::get('/mojadom', [App\Http\Controllers\HomeController::class, 'mojadom'])->name('mojadom');
Route::get('/hillmalayas', [App\Http\Controllers\HomeController::class, 'hillmalayas'])->name('hillmalayas');
Route::post('/students/create', [App\Http\Controllers\StudentsController::class, 'store'])->name('student-create');
Route::post('/teacher/create', [App\Http\Controllers\TeachersController::class, 'store'])->name('teacher-new');
Route::post('/workers/create', [App\Http\Controllers\WorkersController::class, 'store'])->name('workers-create');