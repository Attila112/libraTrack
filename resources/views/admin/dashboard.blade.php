<x-app-layout>
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>

    <ul>
        <li><a href="{{ route('books.index') }}">Manage Books</a></li>
    </ul>
</x-app-layout>

