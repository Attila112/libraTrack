<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title','author','year','pages','available_copies', 'is_borrowed'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    //
    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }

}
