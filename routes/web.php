<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Gyökér URL kezelése
Route::get('/', function () {
    return auth()->check() ? redirect('/dashboard') : redirect('/login');
});

// Bejelentkezett felhasználók számára elérhető útvonalak
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
    Route::post('/books/{book}/borrow', [BorrowingController::class, 'borrow'])->name('books.borrow');
    Route::post('/books/{book}/return', [BorrowingController::class, 'return'])->name('books.return');
    // Könyvek listázása és megtekintése (mindenki számára elérhető)
    Route::get('books', [BookController::class, 'index'])->name('books.index');
    Route::get('books/{book}', [BookController::class, 'show'])->name('books.show');
    Route::get('books/create', [BookController::class, 'create'])->name('books.create');


    // Kommentek hozzáadása
    Route::post('books/{book}/comment', [CommentController::class, 'store'])->name('comment.store');

    // Profil kezelése
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Csak adminok számára elérhető útvonalak
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin dashboard
    Route::get('/admin', function () {
        return view('admin.dashboard'); // Admin dashboard nézet.
    })->name('admin.dashboard');

    // Könyvek CRUD műveletek (kivéve listázás és megtekintés)
    Route::resource('books', BookController::class)->except(['index', 'show', 'create']);
});

require __DIR__.'/auth.php';
