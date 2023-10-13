@extends('layouts.app')
@section('title', 'books')

@section('content')
    <div class="flex items-center py-4 space-x-3 rounded-lg justify-between ml-[30px]">
        {{-- New book --}}
        <a href="{{ route('books.create') }}"
            class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300 rounded-[5px] tracking-wider text-white bg-[#3f51b5] hover:bg-[#4558BE]">
            <i class="fas fa-plus mr-[15px]"></i>New book
        </a>

        {{-- Search --}}
        <form action="{{ route('books.index') }}" method="get">
            <div class="relative text-gray-600 focus-within:text-gray-400 mr-[30px]">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </span>
                <input type="search" name="searchTerm" value="{{ request()->get('searchTerm') }}"
                    class="py-2 pl-10 text-sm text-black bg-white rounded-md focus:outline-none focus:bg-white focus:text-black"
                    placeholder="Search..." autocomplete="off">
            </div>
        </form>

    </div>

    <div
        class="inline-block min-w-full pr-[50px] mt-3 pt-3 align-middle bg-white rounded-bl-lg rounded-br-lg shadow-dashboard ml-[30px]">
        <table class="overflow-hidden shadow-lg rounded-xl min-w-full border-[1px] border-[#e4dfdf]" id="myTable">
            <thead class="bg-[#EFF3F6]">
                <tr class="border-b-[1px] border-[#e4dfdf]">
                    <th class="px-4 py-4 leading-4 tracking-wider text-left text-blue-500">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                        </label>
                    </th>
                    <th class="px-4 py-4 leading-4 tracking-wider text-left">Title
                        <a
                            href="{{ route('books.index', [
                                'orderBy' => 'name',
                                'orderDir' => request()->get('orderDir') == 'desc' ? 'asc' : 'desc',
                                'rowsPerPage' => request()->get('rowsPerPage'),
                                'searchTerm' => request()->get('searchTerm'),
                                'page' => request()->get('page'),
                            ]) }}">
                            <i
                                class="ml-3 fa-lg fas
                                    {{ request()->get('orderDir') == 'asc' ? 'fa-long-arrow-alt-down' : 'fa-long-arrow-alt-up' }}"></i>
                        </a>
                    </th>
                    <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Description</th>
                    <th class="px-4 py-4"> </th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($books as $book)
                    <tr class="hover:bg-gray-200 hover:shadow-md border-b-[1px] border-[#e4dfdf]">
                        <td class="px-4 py-4 whitespace-no-wrap">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox">
                            </label>
                        </td>
                        <td class="flex flex-row items-center px-4 py-4">
                            <img class="object-cover w-8 mr-2 h-11" src="{{ getPicturePath('') }}"
                                onerror="this.onerror=null; this.src='{{ \App\Models\Book::DEFAULT_BOOK_PICTURE_PATH }}'"
                                alt="" />
                            <a href="{{ route('books.show', $book) }}">
                                <span class="mr-2 font-medium text-center">{{ $book->title }}</span>
                            </a>
                        </td>
                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">{{ $book->description }}</td>
                        <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                            <p
                                class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300 dotsbook hover:text-[#606FC7]">
                                <i class="fas fa-ellipsis-v"></i>
                            </p>
                            <div
                                class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-book">
                                <div class="absolute right-[25px] w-56 mt-[7px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                    aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117"
                                    role="menu">
                                    <div class="py-1">
                                        {{-- Edit button --}}
                                        <a href="{{ route('books.edit', $book) }}" tabindex="0"
                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                            role="menuitem">
                                            <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                            <span class="px-4 py-0">Edit book</span>
                                        </a>

                                        {{-- Delete button --}}
                                        <form action="{{ route('books.destroy', $book) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" tabindex="0"
                                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:text-red-500"
                                                style="outline: none">
                                                <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                                <span class="px-4 py-0">Delete book</span>
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
            {{ $books->links() }}
        </div>

        {{-- Rows per page form --}}
        <div class="inline-flex items-center w-full justify-end mt-4">
            <div>
                Rows per page:
                <form class="inline-flex" action="{{ route('books.index') }}">
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

@endsection
