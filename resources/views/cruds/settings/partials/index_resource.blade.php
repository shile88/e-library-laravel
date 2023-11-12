@include('partials.custom.search-bar', [
    'resourceName' => $resourceName,
    'resourcePlural' => $resourcePlural,
])


<div class="px-[30px] pt-2 bg-white">
    <div class="w-full mt-2">
        {{-- Table --}}
        <table class="w-full overflow-hidden shadow-lg rounded-xl" id="myTable">
            <thead class="bg-[#EFF3F6]">
                <tr class="border-b-[1px] border-[#e4dfdf]">
                    <th class="px-4 py-4 leading-4 tracking-wider text-left text-blue-500">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                        </label>
                    </th>

                    {{-- Name --}}
                    <th class="px-4 py-4 leading-4 tracking-wider text-left">Name
                        @include('partials.custom.order-arrow-link', ['resourcePlural' => $resourcePlural])
                    </th>

                    {{-- Value --}}
                    @if (isset($hasValue) && $hasValue == true)
                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Value</th>
                    @endif

                    {{-- Description --}}
                    @if (isset($hasDescription) && $hasDescription == true)
                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Description</th>
                    @endif

                    <th class="px-4 py-4 leading-4 tracking-wider text-left"></th>
                </tr>
            </thead>

            <tbody class="bg-white">
                @foreach ($items as $item)
                    <tr class="hover:bg-gray-200 hover:shadow-md border-b-[1px] border-[#e4dfdf]">
                        <td class="px-4 py-3 whitespace-no-wrap">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox">
                            </label>
                        </td>

                        {{-- Name --}}
                        <td class="flex flex-row items-center px-4 py-3">
                            <i class="{{ $item->icon }} fa-lg text-[#707070]"></i>
                            <p class="ml-4 text-center">{{ $item->name }}</p>
                        </td>

                        {{-- Value --}}
                        @if (isset($hasValue) && $hasValue == true)
                            <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">
                                {{ $item->value . ' ' . $item->unit . '(s)' }}</td>
                        @endif

                        {{-- Description --}}
                        @if (isset($hasDescription) && $hasDescription == true)
                            <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">{{ $item->description }}</td>
                        @endif

                        {{-- Dropdown menu options --}}
                        <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                            <p
                                class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300 dotsAutori hover:text-[#606FC7]">
                                <i class="fas fa-ellipsis-v"></i>
                            </p>
                            <div
                                class="relative z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-autori">
                                <div class="absolute right-[40px] w-56 mt-[7px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
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
            'resourcePlural' => $resourcePlural,
        ])

    </div>
</div>
