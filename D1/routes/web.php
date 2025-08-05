<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RanjitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanjibController;


Route::get('/', [HomeController::class, 'index'])->name('home');



Route::prefix('student')->name('student.')->group(function () {
    Route::get('/sanjib', [SanjibController::class, 'index'])->name('sanjib');
    Route::get('/ranju', [RanjitController::class, 'ranju'])->name('ranju');
});



//student.ranju



Route::get('/teesdfsdfseeeeam', function () {
    return view('team');
})->name('team');



Route::prefix('attendances')->name('attendances.')->controller(AttendanceController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/analytics', 'analytics')->name('analytics');
    Route::post('/check-in', 'checkIn')->name('checkIn');
    Route::post('/check-out', 'checkOut')->name('checkOut');
    Route::post('/start-break', 'startBreak')->name('startBreak');
    Route::post('/end-break', 'endBreak')->name('endBreak');
    Route::get('/{attendance}/todos', 'getTodos')->name('getTodos');
    Route::patch('/todos/{todo}/update-status', 'updateTodo')->name('todosupdateStatus');
    Route::delete('/{attendance}', 'destroy')->name('destroy');
});



Route::prefix('post')->name('post.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
