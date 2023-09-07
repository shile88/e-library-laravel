@extends('layouts.app')

@section('title', $authorName)

@section('content')


@include('author\includes\nav')
  

<div class="scroll height-content section-content">
    <form action="{{ route('authors.update', $author->id) }}" method="POST" class="text-gray-700 forma">
        @csrf
        @method('PUT')
        <div class="flex flex-row ml-[30px]">
            <div class="w-[50%] mb-[150px]">
                <div class="mt-[20px]">
                    <p>Ime i prezime <span class="text-red-500">*</span></p>
                    <input type="text" name="name" id="imePrezimeAutorEdit" value="{{ $author->name }}" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsImePrezimeAutorEdit()"/>
                    <div id="validateImePrezimeAutorEdit"></div>
                </div>

                <div class="mt-[20px]">
                    <p class="inline-block mb-2">Opis</p>
                    <textarea name="about"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]">
                        {{ $author->about }}
                    </textarea>
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
                    <button id="sacuvajAutoraEdit" type="submit"
                        class="btn-animation shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]" onclick="validacijaAutorEdit()">
                        Sacuvaj <i class="fas fa-check ml-[4px]"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>


<script>
    CKEDITOR.replace('opis_autor_edit', {
        width: "90%",
        height: "150px"
    });
</script>

@endsection('content')