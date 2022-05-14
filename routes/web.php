<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::name("admin.")->prefix("admin")->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/notice', [NoticeController::class, 'index'])->name('notice');
    Route::get('/notice/create', [NoticeController::class, 'create'])->name('notice.create');
});

Route::name("teacher.")->prefix("teacher")->middleware(['auth', 'is_teacher'])->group(function () {
    Route::view('/', "teacher.teacher_home")->name('home');
});

Route::name("student.")->prefix("student")->middleware(['auth', 'is_student'])->group(function () {
    Route::view('/', "student.student_home")->name('home');
});

Route::get('/notice', [NoticeController::class, 'index']);