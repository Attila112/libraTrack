<x-layout-app>
<h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Year:</strong> {{ $book->year }}</p>
    <p><strong>Pages:</strong> {{ $book->pages }}</p>
    <p><strong>Available Copies:</strong> {{ $book->available_copies }}</p>
    @if($book->is_borrowed)
        <p><strong>This book is borrowed</strong></p>
    @else
        <form action="{{ route('books.borrow', $book) }}" method="POST">
            @csrf
            <button type="submit">Borrow</button>
        </form>
    @endif

    <h3>Comments:</h3>
    @if(count($book->comments) === 0)
        <a>There is no comments</a>
    @endif
    <ul class="list-group mb-3">
        @foreach ($book->comments as $comment)
            <li class="list-group-item">
                {{ $comment->comment }}
                <small class="text-muted">— {{ $comment->user->name }}</small>
            </li>
        @endforeach
    </ul>

    @if(auth()->check())
        <form method="POST" action="{{ route('comment.store', $book) }}">
            @csrf
            <div class="mb-3">
                <textarea name="comment" class="form-control" placeholder="Add a comment..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>
    @endif

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back to Books</a>
</x-layout-app>
