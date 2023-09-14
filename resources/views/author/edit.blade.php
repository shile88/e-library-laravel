@extends('layouts.app')

@section('title', $authorName)

@section('content')


@include('author\includes\nav')
  

<div class="scroll height-content section-content">
    <form action="{{ route('authors.update', $author->id) }}" method="POST" class="text-gray-700 forma" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        
        <div class="flex flex-row ml-[30px]">
                        <div class="w-[50%] mb-[150px]">
                            <div class="mt-[20px]">
                                <p>Ime i prezime <span class="text-red-500">*</span></p>
                                <input type="text" value="{{ $author->name }}" name="name" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" />
                            </div>

                            <div class="mt-[20px]">
                                <p class="inline-block mb-2">Opis</p>
                                                             
                                <textarea id="message" name="about" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " >{{ $author->about }}</textarea
                            </div>

                            <div class="mt-[50px] inline-block">
                            <label class="mt-6 cursor-pointer">
                            <div id="empty-cover-art" class="relative w-48 h-48 py-[48px] text-center border-2 border-gray-300 border-solid overflow-hidden">
                                <div class="py-4">
                                    <img id="image-output-author" name="picture" src="{{ asset('/storage/'.$author->picture) }}" class="w-48 h-48 absolute top-0 left-0 transition-opacity opacity-100 hover:opacity-80" />
                                    <div class="absolute inset-0 flex items-center justify-center text-gray-500 opacity-0 hover:opacity-100">
                                        <svg class="feather feather-plus-circle" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                    </div>
                                </div>
                                <input type='file' class="hidden" name="picture" :accept="accept" onchange="loadFileAuthor(event)" />
                        </div>

                            </label>  
                        </div>
                        </div>     

                    </div>
                    <div class="absolute bottom-0 w-full">
                        <div class="flex flex-row">
                            <div class="inline-block w-full text-white text-right py-[7px] mr-[100px]">
                                <button type="button"
                                    class="btn-animation shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                                    Ponisti <i class="fas fa-times ml-[4px]"></i>
                                </button>
                                <button type="submit"
                                    class="btn-animation shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]">
                                    Sacuvaj <i class="fas fa-check ml-[4px]"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <script>
                var loadFileAuthor= function (event) {
                var imageStudent = document.getElementById('image-output-author');
                imageStudent.style.display = "block";
                imageStudent.src = URL.createObjectURL(event.target.files[0]);
                };
            </script>



@endsection('content')