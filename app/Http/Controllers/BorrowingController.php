<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function borrow(Request $request, Book $book)
    {
        if ($book->is_borrowed) {
            return back()->with('error', 'This book is already borrowed.');
        }

        Borrowing::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id,
            'borrowed_at' => now(),
            'due_date' => now()->addDays(14),
        ]);

        $book->update(['is_borrowed' => true]);

        return back()->with('success', 'Book borrowed successfully!');
    }
    public function return(Book $book)
    {
        $book->update(['is_borrowed' => false]);
        $borrowing = Borrowing::where('book_id', $book->id)
            ->whereNull('returned_at')
            ->first();

        $borrowing->update(['returned_at' => now()]);

        return back()->with('success', 'The book is returned.');
    }
}
