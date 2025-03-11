<x-layout-app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $book->title }}
        </h2>
    </x-slot>
    <div >
    <div class="flex  justify-center items-center text-2xl gap-2 max-w-1">
        <div class="flex flex-col justify-end">
        <p class="text-blue-500 dark:text-red-400 font-medium"><strong >Title:</strong></p>
        <p class="text-gray-600 dark:text-white">{{ $book->title }}</p>
        <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Author:</strong> </p>
        <p class="text-gray-600 dark:text-white">{{ $book->author }}</p>
        </div>
        <div>
        <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Year:</strong> </p>
            <p class="text-gray-600 dark:text-white">{{ $book->year }}</p>
        <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Pages:</strong> </p>
            <p class="text-gray-600 dark:text-white">{{ $book->pages }}</p>
        <p class="text-blue-500 dark:text-red-400 font-medium"><strong>Available Copies:</strong> </p>
            <p class="text-gray-600 dark:text-white">{{ $book->available_copies }}</p>
        </div>
    </div>

    @if($book->is_borrowed)
        <p><strong>This book is borrowed</strong></p>
    @else
        <form action="{{ route('books.borrow', $book) }}" method="POST">
            @csrf
            <button type="submit">Borrow</button>
        </form>
    @endif


    @if(auth()->check())
    <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion ({{count($book->comments)}})</h2>
            </div>

            @if(count($book->comments) === 0)
                <a>There is no comments</a>
            @endif
            @foreach($book->comments as $comment)
                <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                        class="mr-2 w-6 h-6 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="userName">{{$comment->user->name}} </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"> <time >{{$comment->created_at}}</time></p>
                        </div>
                    </footer>
                    <p class="text-gray-500 dark:text-gray-400">{{$comment->comment}}</p>
                </article>
            @endforeach
        </div>
        @endif

    </section>

        <form method="POST" action="{{ route('comment.store', $book) }}" class="mb-6" >
            @csrf
            <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <textarea id="comment" rows="6" name="comment"
                              class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                              placeholder="Write a comment..." required></textarea>
            </div>
            <x-primary-button class="ms-3">
                {{ __('Post comment') }}
            </x-primary-button>
        </form>

        <x-secondary-button href="{{route('books.index')}}">
            Back to Books!
        </x-secondary-button>
    </div>
</x-layout-app>
