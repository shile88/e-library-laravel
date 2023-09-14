@extends('layouts.app')

@section('title', 'Rezultati pretrage')

@section('content')



<div style="overflow-y:auto; max-height:70vh;">
    
<div class="pl-[30px] py-[10px] flex flex-col">
                <div>
                    <nav class="w-full rounded">
                        <ol class="flex list-reset">
                            <li>
                                <a href="{{ url()->previous() }}" class="text-[#2196f3] hover:text-blue-600">
                                    Nazad
                                </a>
                            </li>
                            <li>
                                <span class="mx-2">/</span>
                            </li>
                            <li>
                                <a  class="text-gray-400">
                                    Pretraga
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            @if(!$authors->count())
            <span class="ml-8 text-red-600">Nema rezultata</span>
            @endif

    @foreach ($authors as $author)
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10">
            <table class="w-full text-sm text-left text-gray-500 " >
            <colgroup>
            <col style="width: 25%;">
            <col style="width: 50%;">
            <col style="width: 15%;">
        </colgroup>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        Autor
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Opis
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Akcije
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $author->name }}
                        </th>

                        <td class="px-6 py-4">
                        {{ substr($author->about,0,500).'...' }}
                        </td>
                        
                        <td class="px-6 py-4">
                        <a class="text-blue-600" href="{{ route('authors.show', $author->id) }}">Više</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach

        
    @foreach ($books as $book)
    <div class="relative overflow-x-auto shadow-md mt-10 sm:rounded-lg mx-10">
            <table class="w-full text-sm text-left text-gray-500 " >
            <colgroup>
            <col style="width: 25%;">
            <col style="width: 40%;">
            <col style="width: 20%;">
            <col style="width: 15%;">
        </colgroup>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        Knjiga
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Opis
                        </th>
                        <th scope="col" class="px-6 py-3">
                        ISBN
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Akcije
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        {{ $book->title }}
                        </th>

                        <td class="px-6 py-4">
                        {{ substr($book->description,0, 500).'...' }}
                        </td>

                        <td class="px-6 py-4">
                        {{ $book->isbn }}
                        </td>
                        
                        <td class="px-6 py-4">
                        <a class="text-blue-600" href="#">Više</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

@endforeach

</div>


   
@endsection
