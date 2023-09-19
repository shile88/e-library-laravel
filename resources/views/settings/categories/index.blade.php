@extends('settings.index')

@section('title', 'Categories')

@section('main-settings')
    <div class="flex items-center py-4 space-x-3 rounded-lg justify-between ml-[30px]">
        {{-- New category --}}
        <a href="{{ route('categories.create') }}"
            class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300 rounded-[5px] tracking-wider text-white bg-[#3f51b5] hover:bg-[#4558BE]">
            <i class="fas fa-plus mr-[15px]"></i>New category
        </a>

        {{-- Search --}}
        {{-- TODO --}}

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
                    <th class="px-4 py-4 leading-4 tracking-wider text-left">Name
                        <a
                            href="{{ route('categories.index', [
                                'orderBy' => 'name',
                                'orderDir' => request()->get('orderDir') == 'desc' ? 'asc' : 'desc',
                                'page' => request()->get('page')
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
                @foreach ($categories as $category)
                    <tr class="hover:bg-gray-200 hover:shadow-md border-b-[1px] border-[#e4dfdf]">
                        <td class="px-4 py-4 whitespace-no-wrap">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox">
                            </label>
                        </td>
                        <td class="flex flex-row items-center px-4 py-4">
                            <i class="{{ $category->icon }} fa-lg text-[#707070]"></i>
                            <p class="ml-4 text-center">{{ $category->name }}</p>
                        </td>
                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">{{ $category->description }}</td>
                        <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                            <p
                                class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300 dotsCategory hover:text-[#606FC7]">
                                <i class="fas fa-ellipsis-v"></i>
                            </p>
                            <div
                                class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-category">
                                <div class="absolute right-[25px] w-56 mt-[7px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                    aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117"
                                    role="menu">
                                    <div class="py-1">
                                        {{-- Edit button --}}
                                        <a href="{{ route('categories.edit', $category) }}" tabindex="0"
                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                            role="menuitem">
                                            <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                            <span class="px-4 py-0">Edit category</span>
                                        </a>

                                        {{-- Delete button --}}
                                        <form action="{{ route('categories.destroy', $category) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" tabindex="0"
                                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:text-red-500"
                                                style="outline: none">
                                                <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                                <span class="px-4 py-0">Delete category</span>
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
        <div class=" flex-row items-center justify-end mt-2">
            {{ $categories->links() }}
        </div>
    @endsection
