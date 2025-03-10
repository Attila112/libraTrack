<x-layout-app>
    <h1>Add New Book</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" id="author" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" id="year" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="number" name="pages" id="pages" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="available_copies" class="form-label">Available Copies</label>
            <input type="number" name="available_copies" id="available_copies" class="form-control" required />
        </div>

        <button type="submit" class="btn btn-success">Save Book</button>
    </form>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back to Books</a>
</x-layout-app>

