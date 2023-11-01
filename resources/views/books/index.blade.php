@extends('layouts.app', [
    'hasHeaderTitle' => true,
])

@section('title', 'Books')

@section('content')

    @include('partials.custom.search-bar', [
        'resourceName' => 'book',
        'plural' => 'books',
    ])

    <div class="px-[30px] pt-2 bg-white">
        <div class="w-full mt-2">

            {{-- Table --}}
            <table class="w-full overflow-hidden shadow-lg rounded-xl" id="myTable">
                {{-- Table head --}}
                <thead class="bg-[#EFF3F6]">
                    <tr class="border-b-[1px] border-[#e4dfdf]">
                        <th class="px-4 py-4 tracking-wider text-left text-blue-500">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox checkAll">
                            </label>
                        </th>
                        {{-- Title --}}
                        <th class="flex items-center px-4 py-4 tracking-wider text-left">
                            Title
                            @include('partials.custom.order-arrow-link', ['plural' => 'books'])
                        </th>
                        {{-- Authors --}}
                        <th id="autoriMenu" class="relative px-4 py-4 text-sm tracking-wider text-left">
                            Authors<i class="ml-2 fas fa-filter"></i>
                        </th>
                        {{-- Categories --}}
                        <th id="kategorijeMenu" class="relative px-4 py-4 text-sm tracking-wider text-left">
                            Categories<i class="ml-2 fas fa-filter"></i>
                        </th>
                        <th class="px-4 py-4 text-sm tracking-wider text-left">Available</th>
                        <th class="px-4 py-4 text-sm tracking-wider text-left">Reserved</th>
                        <th class="px-4 py-4 text-sm tracking-wider text-left">Checked out</th>
                        <th class="px-4 py-4 text-sm tracking-wider text-left">Overdue</th>
                        <th class="px-4 py-4 text-sm tracking-wider text-left">Total</th>
                        <th class="px-4 py-4"></th>
                    </tr>
                </thead>

                {{-- Table body --}}
                <tbody class="bg-white">
                    @foreach ($books as $book)
                        <tr class="hover:bg-gray-200 hover:shadow-md border-b-[1px] border-[#e4dfdf]">
                            <td class="px-4 py-4 ">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox checkOthers">
                                </label>
                            </td>
                            <td class="flex flex-row items-center px-4 py-4">
                                <img class="object-cover w-8 mr-2 h-11" src="{{ getBookPicturePath($book->picture) }}">
                                <a href="{{ route('books.show', $book) }}">
                                    <span class="font-medium text-center">{{ $book->title }}</span>
                                </a>
                            </td>
                            <td class="px-4 py-4 text-sm leading-5 ">
                                @for ($i = 0; $i < 3; $i++)
                                    @if (empty($book->authors[$i]))
                                    @break
                                @endif

                                {{ $book->authors[$i]->name }}<br>
                            @endfor
                        </td>
                        <td class="px-4 py-4 text-sm leading-5 ">
                            @for ($i = 0; $i < 3; $i++)
                                @if (empty($book->categories[$i]))
                                @break
                            @endif

                            {{ $book->categories[$i]->name }}<br>
                        @endfor
                    </td>
                    <td class="px-4 py-4 text-sm ">6</td>
                    <td class="px-4 py-4 text-sm text-blue-800 "><a href="">5</a></td>
                    <td class="px-4 py-4 text-sm text-blue-800 "><a href="">5</a></td>
                    <td class="px-4 py-4 text-sm text-blue-800 "><a href="">2</a></td>
                    <td class="px-4 py-4 text-sm ">11</td>
                    <td class="px-6 py-4 text-sm leading-5 text-right ">
                        <p
                            class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300 dotsKnjige hover:text-[#606FC7]">
                            <i class="fas fa-ellipsis-v"></i>
                        </p>
                        <div
                            class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-knjige">
                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                role="menu">
                                <div class="py-1">
                                    <a href="{{ route('books.show', $book) }}" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">View details</span>
                                    </a>

                                    <a href="{{ route('books.edit', $book) }}" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fas fa-edit mr-[6px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Edit book</span>
                                    </a>

                                    <a href="#" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fas fa-level-up-alt mr-[14px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Otpisi knjigu</span>
                                    </a>

                                    <a href="#" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izdaj knjigu</span>
                                    </a>

                                    <a href="#" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Vrati knjigu</span>
                                    </a>

                                    <a href="#" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="far fa-calendar-check mr-[10px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Rezervisi knjigu</span>
                                    </a>
                                    <form action="{{ route('books.destroy', $book) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <p tabindex="0"
                                            class="flex w-full px-4 text-sm leading-5 text-left
                                                             text-gray-700 hover:text-red-500 z-50">
                                            <button type="submit" class="py-2 ml-[5px]" style="outline: none">
                                                <i class="fa fa-trash mr-[1px]"></i>
                                                <span class="px-4 py-0">Destroy book</span>
                                            </button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    @include('partials.custom.pagination', [
        'items' => $books,
        'plural' => 'books',
    ])

</div>
</div>

@endsection
