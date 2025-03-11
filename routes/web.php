<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check() ? redirect('/dashboard') : redirect('/login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
    Route::post('/books/{book}/borrow', [BorrowingController::class, 'borrow'])->name('books.borrow');
    Route::post('/books/{book}/return', [BorrowingController::class, 'return'])->name('books.return');
    Route::get('books', [BookController::class, 'index'])->name('books.index');
    Route::get('books/{book}', [BookController::class, 'show'])->name('books.show');


    Route::post('books/{book}/comment', [CommentController::class, 'store'])->name('comment.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('books', BookController::class)->except(['index', 'show']);
    Route::get('/books/test', [BookController::class, 'test'])->name('books.test');
});

require __DIR__.'/auth.php';
