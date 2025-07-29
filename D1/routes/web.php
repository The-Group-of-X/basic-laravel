<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanjibController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/sanjib', [SanjibController::class, 'index']);

Route::get('/teesdfsdfseeeeam', function () {
    return view('team');
})->name('team');


// Route::get('/{username}', function ($username = null) {
//     return view('info', [
//         'u' => $username ?? 'No User Name Available'
//     ]);
// });
