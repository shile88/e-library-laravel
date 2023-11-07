@extends('layouts.app', [
    'hasHeaderTitle' => true,
    'title' => 'New book',
    'breadcrumbs' => [
        ['name' => 'Books', 'href' => route('books.index')],
        ['name' => 'New book', 'href' => route('books.create')],
    ]
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
                                'plural' => 'authors',
                            ])

                            {{-- Genres input --}}
                            @include('partials.inputs.multiple-select-input', [
                                'items' => $genres,
                                'label' => 'Genres',
                                'placeholder' => 'Choose genres',
                                'plural' => 'genres',
                            ])

                            {{-- Categories input --}}
                            @include('partials.inputs.multiple-select-input', [
                                'items' => $categories,
                                'label' => 'Categories',
                                'placeholder' => 'Choose categories',
                                'plural' => 'categories',
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
                            <!-- <div class="mt-[20px]">
                                <p>Add a photo</p>
                                <input type="file" id="image-upload-input" name="picture" accept="image/*"
                                    class="shadow-md w-[360px]" onchange="loadBookImage(event)" />
                                <img id="image-upload-output" width="360" class="mt-[20px] p-2 border-2 border-gray-300"
                                    alt="Book image" src="{{ asset(\App\Models\Book::DEFAULT_BOOK_PICTURE_PATH) }}" />
                            </div> -->


                            <div class="w-9/12 bg-white rounded p7 mt-[20px]">
                        <div x-data="dataFileDnD()"
                            class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                            <div x-ref="dnd"
                                class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                                <input accept="*" type="file" name="pictures[]" multiple
                                    class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                    @change="addFiles($event)"
                                    @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                    @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    title="" />

                                <div class="flex flex-col items-center justify-center py-10 text-center">
                                    <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="m-0">Drag your files here or click in this area.</p>
                                </div>
                            </div>

                            <template x-if="files.length > 0">
                                <div class="grid grid-cols-4 gap-4 mt-4" @drop.prevent="drop($event)"
                                    @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                    <template x-for="(_, index) in Array.from({ length: files.length })">
                                        <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                            style="padding-top: 100%;" @dragstart="dragstart($event)"
                                            @dragend="fileDragging = null"
                                            :class="{'border-blue-600': fileDragging == index}" draggable="true"
                                            :data-index="index">
                                            <!-- Checkbox -->
                                            <input
                                                class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none"
                                                type="radio" name="chosen_image" :value="index"/>
                                            <!-- End checkbox -->
                                            <button
                                                class="absolute bottom-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none"
                                                type="button" @click="remove(index)">
                                                <svg class="w-[25px] h-[25px] text-gray-700"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" nviewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                            <template x-if="files[index].type.includes('audio/')">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                </svg>
                                            </template>
                                            <template
                                                x-if="files[index].type.includes('application/') || files[index].type === ''">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                </svg>
                                            </template>
                                            <template x-if="files[index].type.includes('image/')">
                                                <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                    x-bind:src="loadFile(files[index])" />
                                            </template>
                                            <template x-if="files[index].type.includes('video/')">
                                                <video
                                                    class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                                </video>
                                            </template>

                                            <div
                                                class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                <span class="w-full font-bold text-gray-900 truncate"
                                                    x-text="files[index].name">Loading</span>
                                                <span class="text-xs text-gray-900"
                                                    x-text="humanFileSize(files[index].size)">...</span>
                                            </div>

                                            <div class="absolute inset-0 z-40 transition-colors duration-300"
                                                @dragenter="dragenter($event)" @dragleave="fileDropping = null"
                                                :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
            </div>


                        </div>

                        {{-- Buttons --}}
                        @include('partials.custom.submit-cancel-buttons')

                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
