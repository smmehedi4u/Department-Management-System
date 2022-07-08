<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoutineController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\StdProfileController;
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

    //Notice
    Route::name("notice.")->prefix('notice')->group(function () {
        Route::get('/', [NoticeController::class, 'index'])->name('index');
        Route::get('/create', [NoticeController::class, 'create'])->name('create');
        Route::post('/create', [NoticeController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [NoticeController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [NoticeController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [NoticeController::class, 'update'])->name('update');
    });

    //Batch
    Route::name("batch.")->prefix('batch')->group(function () {
        Route::get('/', [BatchController::class, 'index'])->name('index');
        Route::get('/create', [BatchController::class, 'create'])->name('create');
        Route::post('/create', [BatchController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [BatchController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [BatchController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [BatchController::class, 'update'])->name('update');
    });

    //Designation
    Route::name("designation.")->prefix('designation')->group(function () {
        Route::get('/', [DesignationController::class, 'index'])->name('index');
        Route::get('/create', [DesignationController::class, 'create'])->name('create');
        Route::post('/create', [DesignationController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [DesignationController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [DesignationController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [DesignationController::class, 'update'])->name('update');
    });

    //Event
    Route::name("event.")->prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/create', [EventController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [EventController::class, 'update'])->name('update');
    });

    // //Result
    // Route::name("result.")->prefix('result')->group(function () {
    //     Route::get('/', [ResultController::class, 'index'])->name('index');
    //     Route::get('/create', [ResultController::class, 'create'])->name('create');
    //     Route::post('/create', [ResultController::class, 'store'])->name('store');
    //     Route::delete('/delete/{id}', [ResultController::class, 'destroy'])->name('destroy');
    //     Route::get('/edit/{id}', [ResultController::class, 'edit'])->name('edit');
    //     Route::post('/edit/{id}', [ResultController::class, 'update'])->name('update');
    // });

    //Room
    Route::name("room.")->prefix('room')->group(function () {
        Route::get('/', [RoomController::class, 'index'])->name('index');
        Route::get('/create', [RoomController::class, 'create'])->name('create');
        Route::post('/create', [RoomController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [RoomController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [RoomController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [RoomController::class, 'update'])->name('update');
    });

    //Routine
    Route::name("routine.")->prefix('routine')->group(function () {
        Route::get('/', [RoutineController::class, 'index'])->name('index');
        Route::get('/create', [RoutineController::class, 'create'])->name('create');
        Route::post('/create', [RoutineController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [RoutineController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [RoutineController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [RoutineController::class, 'update'])->name('update');
    });

    //Subject
    Route::name("subject.")->prefix('subject')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('index');
        Route::get('/create', [SubjectController::class, 'create'])->name('create');
        Route::post('/create', [SubjectController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [SubjectController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [SubjectController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [SubjectController::class, 'update'])->name('update');
    });

    //Task
    // Route::name("task.")->prefix('task')->group(function () {
    //     Route::get('/', [TaskController::class, 'index'])->name('index');
    //     Route::get('/create', [TaskController::class, 'create'])->name('create');
    //     Route::post('/create', [TaskController::class, 'store'])->name('store');
    //     Route::delete('/delete/{id}', [TaskController::class, 'destroy'])->name('destroy');
    //     Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
    //     Route::post('/edit/{id}', [TaskController::class, 'update'])->name('update');
    // });

});

Route::name("teacher.")->prefix("teacher")->middleware(['auth', 'is_teacher'])->group(function () {
    Route::view('/', "teacher.teacher_home")->name('home');

    //Profile
    Route::name("profile.")->prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::get('/create', [ProfileController::class, 'create'])->name('create');
        Route::post('/create', [ProfileController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [ProfileController::class, 'destroy'])->name('destroy');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/edit', [ProfileController::class, 'update'])->name('update');
    });



    //Publication
    Route::name("publication.")->prefix('publication')->group(function () {
        Route::get('/', [PublicationController::class, 'index'])->name('index');
        Route::get('/create', [PublicationController::class, 'create'])->name('create');
        Route::post('/create', [PublicationController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [PublicationController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [PublicationController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [PublicationController::class, 'update'])->name('update');
    });
});

Route::name("admin.")->prefix("admin")->middleware(['auth', 'is_not_student'])->group(function () {
    //Task
    Route::name("task.")->prefix('task')->group(function () {
        Route::get('/', [TaskController::class, 'index'])->name('index');
        Route::get('/create', [TaskController::class, 'create'])->name('create');
        Route::post('/create', [TaskController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [TaskController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [TaskController::class, 'update'])->name('update');
    });

    //Result
    Route::name("result.")->prefix('result')->group(function () {
        Route::get('/', [ResultController::class, 'index'])->name('index');
        Route::get('/create', [ResultController::class, 'create'])->name('create');
        Route::post('/create', [ResultController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [ResultController::class, 'destroy'])->name('destroy');
        Route::get('/edit/{id}', [ResultController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [ResultController::class, 'update'])->name('update');
    });
});

Route::name("student.")->prefix("student")->middleware(['auth', 'is_student'])->group(function () {
    Route::view('/', "student.student_home")->name('home');

    //Profile
    Route::name("profile.")->prefix('profile')->group(function () {
        Route::get('/', [StdProfileController::class, 'index'])->name('index');
        Route::get('/create', [StdProfileController::class, 'create'])->name('create');
        Route::post('/create', [StdProfileController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [StdProfileController::class, 'destroy'])->name('destroy');
        Route::get('/edit', [StdProfileController::class, 'edit'])->name('edit');
        Route::post('/edit', [StdProfileController::class, 'update'])->name('update');
    });
});
