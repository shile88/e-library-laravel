@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New book',
    'breadcrumbs' => [['name' => 'Books', 'href' => route('books.index')], ['name' => 'New book', 'href' => route('books.create')]],
])

@section('content')
    <div class="scroll pb-[100px] section-content">

        <form class="text-gray-700 forma" method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="flex flex-row overflow-auto">
                <div class="pl-[30px] w-[100%]">
                    <div class="grid grid-cols-3">

                        {{-- First column --}}
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

                        {{-- Second column --}}
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

                        {{-- Third column --}}
                        <div class="row-3">
                            {{-- Description input --}}
                            @include('partials.inputs.textarea-input', [
                                'label' => 'Description',
                                'placeholder' => 'Enter a short description about the book (min. 20 characters)',
                                'attributes' => 'minlength=20',
                                'field_name' => 'description',
                            ])

                            {{-- Picture input --}}
                            @include('partials.inputs.picture-input', [
                                'model' => 'book',
                            ])

                            {{-- Buttons --}}
                            @include('partials.custom.submit-cancel-buttons')
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
