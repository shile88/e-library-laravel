@extends('layouts.app')

@section('title', 'Novi Autor')

@section('content')


    
<div class="pl-[30px] py-[10px] flex flex-col">
            <div>
                <h1>
                    Dodaj novog autora
                </h1>
            </div>
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
                            <a class="text-gray-400 ">
                                Novi autor
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
            <!-- Space for content -->
            <div class="scroll height-content section-content">
                <form action="{{ route('authors.store') }}" method="POST" class="text-gray-700 forma" enctype="multipart/form-data">
                @csrf             
                   
                    <div class="flex flex-row ml-[30px]">
                        <div class="w-[50%] mb-[150px]">
                            <div class="mt-[20px]">
                                <p>Ime i prezime <span class="text-red-500">*</span></p>
                                <input type="text" name="name" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" />
                            </div>

                            <div class="mt-[20px]">
                                <p class="inline-block mb-2">Opis</p>
                                                             
                                <textarea id="message" name="about" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Unesite opis..."></textarea
                            </div>

                            <div class="mt-[50px] inline-block">
                            <label class="mt-6 cursor-pointer">
                                <div id="empty-cover-art" class="relative w-48 h-48 py-[48px] text-center border-2 border-gray-300 border-solid">
                                    <div class="py-4">
                                        <svg class="mx-auto feather feather-image mb-[15px]" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                        <span class="px-4 py-2 mt-2 leading-normal">Add photo</span>
                                        <input type='file' class="hidden" name="picture" :accept="accept" onchange="loadFileAuthor(event)" />
                                    </div>
                                    <img id="image-output-author" class="hidden absolute w-48 h-[188px] bottom-0" />	
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