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
            'due_date' => now()->addDays(14), // 2 hét határidő
        ]);

        $book->update(['is_borrowed' => true]);

        return back()->with('success', 'Book borrowed successfully!');
    }
    public function return(Book $book)
    {
        $borrowing = Borrowing::where('book_id', $book->id)
            ->whereNull('returned_at')
            ->first();

        if (!$borrowing) {
            return back()->with('error', 'Ez a könyv nincs kikölcsönözve.');
        }

        $borrowing->update(['returned_at' => now()]);
        $book->update(['is_borrowed' => false]);

        return back()->with('success', 'Sikeresen visszahoztad a könyvet!');
    }
}
