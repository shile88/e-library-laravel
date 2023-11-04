@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New book',
    'breadcrumbs' => [['name' => 'Books', 'href' => route('books.index')], ['name' => 'New book', 'href' => route('books.create')]],
])

@section('title', 'Books')

@section('content')
    <div class="scroll height-content pb-[100px] section-content">
        <form class="text-gray-700 forma" method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="flex flex-row overflow-auto">
                <div class="pl-[30px] w-[100%]">
                    <div class="grid grid-cols-3">
                        <div class="row-1">
                            {{-- Title input --}}
                            @include('partials.inputs.text-input', [
                                'label' => 'Title',
                                'field_name' => 'title',
                                'placeholder' => 'Enter a title',
                            ])

                            {{-- ISBN input --}}
                            @include('partials.inputs.text-input', [
                                'label' => 'ISBN',
                                'field_name' => 'isbn',
                                'placeholder' => 'Enter an ISBN',
                            ])

                            {{-- Binding input --}}
                            @include('partials.inputs.single-select-input', [
                                'items' => $bindings,
                                'label' => 'Binding',
                                'placeholder' => 'Choose a binding',
                                'field_name' => 'binding_id',
                            ])

                            {{-- Size input --}}
                            @include('partials.inputs.single-select-input', [
                                'items' => $sizes,
                                'label' => 'Size',
                                'placeholder' => 'Choose a size',
                                'field_name' => 'size_id',
                            ])

                            {{-- Script input --}}
                            @include('partials.inputs.single-select-input', [
                                'items' => $scripts,
                                'label' => 'Script',
                                'placeholder' => 'Choose a script',
                                'field_name' => 'script_id',
                            ])

                            {{-- Publisher input --}}
                            @include('partials.inputs.single-select-input', [
                                'items' => $publishers,
                                'label' => 'Publisher',
                                'placeholder' => 'Choose a publisher',
                                'field_name' => 'publisher_id',
                            ])
                        </div>

                        <div class="row-2">
                            {{-- Authors input --}}
                            @include('partials.inputs.multiple-select-input', [
                                'items' => $authors,
                                'label' => 'Authors',
                                'placeholder' => 'Choose authors',
                                'resourcePlural' => 'authors',
                            ])

                            {{-- Genres input --}}
                            @include('partials.inputs.multiple-select-input', [
                                'items' => $genres,
                                'label' => 'Genres',
                                'placeholder' => 'Choose genres',
                                'resourcePlural' => 'genres',
                            ])

                            {{-- Categories input --}}
                            @include('partials.inputs.multiple-select-input', [
                                'items' => $categories,
                                'label' => 'Categories',
                                'placeholder' => 'Choose categories',
                                'resourcePlural' => 'categories',
                            ])

                            {{-- Number of pages input --}}
                            @include('partials.inputs.number-input', [
                                'label' => 'Number of pages',
                                'placeholder' => 'Choose a number of pages',
                                'field_name' => 'page_count',
                            ])

                            {{-- Number of copies input --}}
                            @include('partials.inputs.number-input', [
                                'label' => 'Number of copies',
                                'placeholder' => 'Choose a number of copies',
                                'field_name' => 'total_count',
                            ])

                            {{-- Date of publishing input --}}
                            @include('partials.inputs.date-input', [
                                'label' => 'Date of publishing',
                                'field_name' => 'publish_date',
                            ])
                        </div>

                        <div class="row-3">
                            {{-- Description input --}}
                            <div class="mt-[20px]">
                                <p>Description<span class="text-red-500">*</span></p>
                                <textarea required name="description" rows="8" minlength="20"
                                    placeholder="Enter a short description about the book (min. 20 characters)"
                                    class="w-[90%] mt-2 px-2 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#576cdf]">{{ old('description') }}</textarea>
                                @if ($errors->first('description'))
                                    <p class="text-red-600">{{ $errors->first('description') }}</p>
                                @endif
                            </div>

                            {{-- Picure input --}}
                            <div class="mt-[20px]">
                                <p>Add a photo</p>
                                <input type="file" id="image-upload-input" name="picture" accept="image/*"
                                    class="shadow-md w-[360px]" onchange="loadBookImage(event)" />
                                <img id="image-upload-output" width="360" class="mt-[20px] p-2 border-2 border-gray-300"
                                    alt="Book image" src="{{ asset(\App\Models\Book::DEFAULT_BOOK_PICTURE_PATH) }}" />
                            </div>
                            <h5 class="shadow-lg mt-2 py-2 text-white px-5 w-[150px] text-sm bg-[#F44336] rounded-[5px]"
                                onclick="removeUploadedBookImage(event)">Remove picture</h5>
                        </div>

                        {{-- Buttons --}}
                        @include('partials.custom.submit-cancel-buttons')

                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
