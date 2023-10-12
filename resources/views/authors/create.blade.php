@extends('layouts.app')
@section('title', 'Novi Autor')
@section('content')
    <div class="heading">
        <div class="flex justify-between border-b-[1px] border-[#e4dfdf]">
            <div class="pl-[30px] py-[10px] flex flex-col">
                {{-- Name --}}
                <h1>Novi autor</h1>

                {{-- Breadcrumbs --}}
                <div>
                    <nav class="w-full rounded">
                        <ol class="flex list-reset">
                            <li>
                                <a href="{{ route('authors.index') }}" class="text-[#2196f3] hover:text-blue-600">
                                    Evidencija autora
                                </a>
                            </li>
                            <li>
                                <span class="mx-2">/</span>
                            </li>
                            <li>
                                <a href="{{ route('authors.create') }}" class="text-[#2196f3] hover:text-blue-600">
                                    Novi autor
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="scroll height-content section-content">
        <form action="{{ route('authors.store') }}" method="POST" class="text-gray-700 forma"
            enctype="multipart/form-data">
            @csrf

            <div class="flex flex-row ml-[30px]">
                <div class="w-[50%] mb-[150px]">

                    {{-- Name --}}
                    <div class="mt-[20px]">
                        <p>Ime i prezime <span class="text-red-500">*</span></p>
                        <input type="text" name="name" placeholder="Unesite ime" required
                            class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" />
                        @if ($errors->first('name'))
                            <p class="text-red-600 mt-[5px]">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

                    {{-- About --}}
                    <div class="mt-[20px]">
                        <p class="inline-block mb-2">Opis <span class="text-red-500">*</span></p>

                        <textarea id="message" name="about" rows="10" required
                            class="block p-2.5 w-full text-gray-900 bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Unesite opis"></textarea>
                        @if ($errors->first('about'))
                            <p class="text-red-600 mt-[5px]">{{ $errors->first('about') }}</p>
                        @endif
                    </div>

                    {{-- Picture --}}
                    <div class="mt-[50px] inline-block">
                        <label class="mt-6 cursor-pointer">
                            <div
                                class="relative w-[300px] h-[300px] py-[48px] text-center border-2 border-gray-300 border-solid">

                                {{-- Display of picture --}}
                                <img id="image-output-author" name="picture" alt="Author picture"
                                    src="{{ \App\Models\Author::DEFAULT_AUTHOR_PICTURE_PATH }}"
                                    class="w-[300px] h-[300px] absolute top-0 left-0 transition-opacity opacity-100 hover:opacity-80" />

                                <input type='file' class="hidden" name="picture" :accept="accept"
                                    onchange="loadFileAuthor(event)" />

                                @if ($errors->first('picture'))
                                    <p class="text-red-600 mt-[5px]">{{ $errors->first('picture') }}</p>
                                @endif
                            </div>
                        </label>
                    </div>

                </div>
            </div>

            {{-- Buttons --}}
            <div class="absolute bottom-0 w-full">
                <div class="flex flex-row">
                    <div class="inline-block w-full text-white text-right py-[7px] mr-[100px]">
                        <button type="submit"
                            class="btn-animation shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]">
                            Sacuvaj <i class="fas fa-check ml-[4px]"></i>
                        </button>

                        <a href="{{ url()->previous() }}"
                            class="btn-animation shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                            Ponisti <i class="fas fa-times ml-[4px]"></i>
                        </a>
                    </div>
                </div>
            </div>

        </form>
    </div>

    {{-- Loading and showing image function --}}
    <script>
        var loadFileAuthor = function(event) {
            var imageAuthor = document.getElementById('image-output-author');

            imageAuthor.style.display = "block";

            if (event.target.files[0]) {
                imageAuthor.src = window.URL.createObjectURL(event.target.files[0]);
            } else {
                imageAuthor.src = "{{ \App\Models\Author::DEFAULT_AUTHOR_PICTURE_PATH }}";
            }
        };
    </script>

@endsection('content')
