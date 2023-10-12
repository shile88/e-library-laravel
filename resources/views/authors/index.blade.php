@extends('layouts.app')
@section('title', 'Autori')
@section('content')
    <div class="heading">
        <div class="flex justify-between border-b-[1px] border-[#e4dfdf]">
            <div class="pl-[30px] py-[10px] flex flex-col">
                {{-- Title --}}
                <h1>Autori</h1>

                {{-- Breadcrumbs --}}
                <div>
                    <nav class="w-full rounded">
                        <ol class="flex list-reset">
                            <li>
                                <a href="{{ route('authors.index') }}" class="text-[#2196f3] hover:text-blue-600">
                                    Evidencija autora
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <div class="pb-[180px] scroll" style="overflow-y:auto; max-height:100vh;">
        <div class="flex items-center px-[30px] py-4 space-x-3 rounded-lg justify-between">
            <div>
                <a href="{{ route('authors.create') }}"
                    class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300 rounded-[5px] tracking-wider text-white bg-[#3f51b5] hover:bg-[#4558BE]">
                    <i class="fas fa-plus mr-[15px]"></i> Novi autor
                </a>

                @if ($authors->count())
                    <form action="{{ route('authors.bulkDelete') }}" method="POST" class="inline-block"
                        id="bulk_delete_form">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="selected_ids" id="selected_ids_input" value="">
                        <button
                            class="btn-animation inline-flex  ml-[15px] items-center text-sm py-2.5 px-5 transition duration-300 rounded-[5px] tracking-wider text-white bg-[#3f51b5] hover:bg-[#4558BE]"
                            type="button" id="bulk_delete_button">
                            <i class="fas fa-trash mr-[15px]"></i> Obriši sve selektovano
                        </button>
                    </form>
                @endif
            </div>

            <x-search-bar />
        </div>

        <div
            class="inline-block min-w-full px-[30px] pt-3 align-middle bg-white rounded-bl-lg rounded-br-lg shadow-dashboard">
            <table class="overflow-hidden shadow-lg rounded-xl min-w-full border-[1px] border-[#e4dfdf]" id="myTable">
                @if ($authors->count())
                    <thead class="bg-[#EFF3F6]">
                        <tr class="border-b-[1px] border-[#e4dfdf]">
                            <th class="px-4 py-4 leading-4 tracking-wider text-left text-blue-500">
                                <label class="inline-flex items-center">
                                    <input id="select_all_ids" name="" type="checkbox" class="form-checkbox">
                                </label>
                            </th>
                            <th class="px-4 py-4 leading-4 tracking-wider text-left">Naziv autora
                                <a
                                    href="{{ route('authors.index', [
                                        'orderBy' => 'name',
                                        'orderDir' => request()->get('orderDir') == 'desc' ? 'asc' : 'desc',
                                        'rowsPerPage' => request()->get('rowsPerPage'),
                                        'searchTerm' => request()->get('searchTerm'),
                                        'page' => request()->get('page'),
                                        'rowsPerPage' => request()->get('rowsPerPage'),
                                    ]) }}">
                                    <i
                                        class="ml-3 fa-lg fas
                                {{ request()->get('orderDir') == 'asc' ? 'fa-long-arrow-alt-down' : 'fa-long-arrow-alt-up' }}"></i>
                                </a>
                            </th>
                            <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Opis
                            </th>
                            <th class="px-4 py-4"> </th>
                        </tr>
                    </thead>
                @else
                    <p class="text-xl text-red-500 mb-[20px]">Nema rezultata</p>
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        href="{{ url()->previous() }}">Vrati se nazad</a>
                @endif

                <tbody class="bg-white">
                    @foreach ($authors as $author)
                        <tr class="hover:bg-gray-200 hover:shadow-md border-b-[1px] border-[#e4dfdf] ">
                            <td class="px-4 py-3 whitespace-no-wrap">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="ids" class="form-checkbox" id=""
                                        value="{{ $author->id }}">
                                </label>
                            </td>
                            <td class="flex flex-row items-center px-4 py-3">
                                <img class="object-cover w-8 mr-2 h-11" src="{{ getPicturePath($author->picture) }}"
                                    alt="" />
                                <a href="{{ route('authors.show', $author) }}">
                                    <span class="mr-2 font-medium text-center">{{ $author->name }}</span>
                                </a>
                            </td>
                            </td>
                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">
                                {{ substr($author->about, 0, 400) . '...' }}</td>
                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                <p
                                    class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300 dotsAutori hover:text-[#606FC7]">
                                    <i class="fas fa-ellipsis-v"></i>
                                </p>
                                <div
                                    class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-autori">
                                    <div class="absolute right-[50px] w-56 mt-[-100px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                        aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117"
                                        role="menu">
                                        <div class="py-1">
                                            <a href="{{ route('authors.show', $author->id) }}" tabindex="0"
                                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                role="menuitem">
                                                <i class="far fa-file mr-[5px] ml-[5px] py-1"></i>
                                                <span class="px-4 py-0">Pogledaj detalje</span>
                                            </a>
                                            <a href="{{ route('authors.edit', $author->id) }}" tabindex="0"
                                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                                role="menuitem">
                                                <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                                <span class="px-4 py-0">Izmijeni autora</span>
                                            </a>

                                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button id="deleteAuthors" type="submit" tabindex="0"
                                                    class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600">
                                                    <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi autora</span>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="mt-2">
                {{ $authors->links() }}
            </div>

            {{-- Rows per page form --}}
            <div class="inline-flex items-center w-full justify-end mt-4">
                <div>
                    Rows per page:
                    <form class="inline-flex" action="{{ route('authors.index') }}">
                        <select
                            class="ml-2 pl-2 w-[60px] border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                            onchange="this.form.submit()" name="rowsPerPage">
                            <option value="5" {{ request()->get('rowsPerPage') == 5 ? 'selected' : '' }}>5</option>
                            <option value="7" {{ request()->get('rowsPerPage') == 7 ? 'selected' : '' }}>7</option>
                            <option value="10" {{ request()->get('rowsPerPage') == 10 ? 'selected' : '' }}>10</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection('content')
