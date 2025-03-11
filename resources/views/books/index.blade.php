<x-layout-app>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

        <form action="{{ route('books.search') }}" method="GET" class="flex flex-wrap gap-4 items-center ">
            <input type="text" name="title" placeholder="Title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <input type="text" name="author" placeholder="Author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <input type="number" name="year" placeholder="Year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <label class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="only_available" value="1" @if(request('only_available')) checked @endif>
                Only available
            </label>

            <select name="is_borrowed" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Anyway</option>
                <option value="0">Available</option>
                <option value="1">Borrowed</option>
            </select>

            <x-primary-button class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                {{ __('Search') }}
            </x-primary-button>
        </form>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Title</th>
            <th scope="col" class="px-6 py-3">Author</th>
            <th scope="col" class="px-6 py-3">Year</th>
            <th scope="col" class="px-6 py-3">Pages</th>
            <th scope="col" class="px-6 py-3">Available Copies</th>
            <th scope="col" class="px-6 py-3">Borrowing</th>
            <th scope="col" class="px-6 py-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <td class="px-6 py-4">{{ $book->title }}</td>
                <td class="px-6 py-4">{{ $book->author }}</td>
                <td class="px-6 py-4">{{ $book->year }}</td>
                <td class="px-6 py-4">{{ $book->pages }}</td>
                <td class="px-6 py-4">{{ $book->available_copies }}</td>
                <td class="px-6 py-4">
                    @if (!$book->is_borrowed)
                        <form action="{{ route('books.borrow', $book) }}" method="POST">
                            @csrf
                            <button type="submit">Borrow</button>
                        </form>
                    @else
                        <p>On loan</p>
                        @if (auth()->check() && auth()->user()->role === 'admin') <!-- Csak adminok láthatják -->
                        <form action="{{ route('books.return', $book) }}" method="POST">
                            @csrf
                            <button type="submit">Return</button>
                        </form>
                        @endif
                    @endif</td>
                <td class="px-6 py-4">
                    <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">View</a>
                    @if(auth()->check() && auth()->user()->role === 'admin')
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form method="POST" action="{{ route('books.destroy', $book) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</x-layout-app>
