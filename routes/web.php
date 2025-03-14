<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home1');
})->name('home');
Route::view('about', 'about')->name('about');
Route::view('who', 'who')->name('who');
Route::view('how', 'how')->name('how');
Route::view('leadership', 'leadership')->name('leadership');
Route::view('insights', 'insights')->name('insights');
Route::view('purpose', 'purpose')->name('purpose');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
