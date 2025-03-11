<x-layout-app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit a Book') }}
        </h2>
    </x-slot>
    <div class="mb-3 flex justify-center gap-6">

        <div class="flex flex-col text-left text-2xl">
            <p class="text-blue-500 dark:text-red-400 font-medium"><strong >Title:</strong></p>
            <p class="text-gray-600 dark:text-white">{{ $book->title }}</p>
            <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Author:</strong> </p>
            <p class="text-gray-600 dark:text-white">{{ $book->author }}</p>
            <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Year:</strong> </p>
            <p class="text-gray-600 dark:text-white">{{ $book->year }}</p>
            <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Pages:</strong> </p>
            <p class="text-gray-600 dark:text-white">{{ $book->pages }}</p>
            <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Available Copies:</strong> </p>
            <p class="text-gray-600 dark:text-white">{{ $book->available_copies }}</p>
        </div>
        <form class="flex items-center  flex-col max-w-[335px]" method="POST" action="{{ route('books.update', $book) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="text-blue-500 dark:text-red-400 font-medium"> <strong>Title</strong></label>
                <input id="title" name="title" type="text" value="{{$book->title}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required ></input>
            </div>

            <div class="mb-3">
                <label for="author" class="text-blue-500 dark:text-red-400 font-medium"><strong>Author</strong></label>
                <input type="text" name="author" id="author" value="{{ $book->author }}" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>

            <div class="mb-3">
                <label for="year" class="text-blue-500 dark:text-red-400 font-medium"><strong>Year</strong></label>
                <input type="number" name="year" id="year"  value="{{ $book->year }}" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div class="mb-3">
                <label for="pages" class="text-blue-500 dark:text-red-400 font-medium"><strong>Pages</strong></label>
                <input type="number" name="pages" id="pages"  value="{{ $book->pages }}" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div class="mb-3">
                <label for="available_copies" class="text-blue-500 dark:text-red-400 font-medium"><strong>Available Copies</strong></label>
                <input type="number" name="available_copies" id="available_copies" value="{{ $book->available_copies }}" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <x-primary-button> Update Book</x-primary-button>

        </form>
    </div>
    <x-secondary-button class="justify-center" href="{{route('books.index')}}">
        Back to Books!
    </x-secondary-button>

</x-layout-app>
