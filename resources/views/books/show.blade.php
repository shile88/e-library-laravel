@extends('layouts.app', [
    'hasHeaderTitle' => true,
])

@section('title', $book->title)

@section('content')

    <div class="pl-[30px] section- mt-[20px]">
        <div class="flex flex-row justify-between">
            <div class="mr-[30px]">
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Title</span>
                    <p class="font-medium">{{ $book->title }}</p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Authors</span>
                    <p class="font-medium">
                        @foreach ($book->authors as $author)
                            <span>{{ $author->name }}</span><br>
                        @endforeach
                    </p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Genres</span>
                    <p class="font-medium">
                        @foreach ($book->genres as $genre)
                            <span>{{ $genre->name }}</span><br>
                        @endforeach
                    </p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Categories</span>
                    <p class="font-medium">
                        @foreach ($book->categories as $category)
                            <span>{{ $category->name }}</span><br>
                        @endforeach
                    </p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Publisher</span>
                    <p class="font-medium">{{ $book->publisher->name }}</p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Publish date</span>
                    <p class="font-medium">{{ $book->publish_date }}</p>
                </div>
            </div>

            <div class="mr-[70px] mt-[20px] flex flex-col max-w-[600px]">
                <div>
                    <h4 class="text-gray-500 ">
                        Description
                    </h4>
                    <p class="addReadMore showlesscontent my-[10px]">{{ $book->description }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">ISBN</span>
                    <p class="font-medium">{{ $book->isbn }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Number of pages</span>
                    <p class="font-medium">{{ $book->page_count }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Available copies</span>
                    <p class="font-medium">{{ $book->total_count }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Script</span>
                    <p class="font-medium">{{ $book->script->name }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Size</span>
                    <p class="font-medium">{{ $book->size->name }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Binding</span>
                    <p class="font-medium">{{ $book->binding->name }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
