@include('partials.custom.search-bar', [
    'resourceName' => $resourceName,
    'plural' => $resourcePlural,
])

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
                    @include('partials.custom.order-arrow-link', ['plural' => $resourcePlural])
                </th>
                <th class="px-4 py-4"></th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($items as $item)
                <tr class="hover:bg-gray-200 hover:shadow-md border-b-[1px] border-[#e4dfdf]">
                    <td class="px-4 py-4 whitespace-no-wrap">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                        </label>
                    </td>
                    <td class="flex flex-row items-center px-4 py-4">
                        <p class="ml-4 text-center">{{ $item->name }}</p>
                    </td>
                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                        <p
                            class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300 dotsCategory hover:text-[#606FC7]">
                            <i class="fas fa-ellipsis-v"></i>
                        </p>
                        <div
                            class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-category">
                            <div class="absolute right-[50px] w-56 mt-[-75px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117"
                                role="menu">
                                <div class="py-1">
                                    {{-- Edit button --}}
                                    <a href="{{ route($resourcePlural . '.edit', $item) }}" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                        role="menuitem">
                                        <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Edit {{ $resourceName }}</span>
                                    </a>

                                    {{-- Delete button --}}
                                    <form action="{{ route($resourcePlural . '.destroy', $item) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="currentPage" value="{{ $items->currentPage() }}">
                                        <input type="hidden" name="total" value="{{ $items->total() }}">
                                        <input type="hidden" name="perPage" value="{{ $items->perPage() }}">

                                        <button type="submit" tabindex="0"
                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:text-red-500"
                                            style="outline: none">
                                            <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                            <span class="px-4 py-0">Delete {{ $resourceName }}</span>
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

    @include('partials.custom.pagination', [
        'items' => $items,
        'plural' => $resourcePlural,
    ])

</div>
