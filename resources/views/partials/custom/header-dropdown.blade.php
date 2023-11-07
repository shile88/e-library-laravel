<div class="mt-[22px]">

    {{-- Header links --}}
    @if(isset($headerLinks))
        @foreach ($headerLinks as $link)
            <a href="{{ $link['href'] }}" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                <i class="{{ $link['icon'] }} mr-[3px] "></i>
                {{ $link['label'] }}
            </a>
        @endforeach
    @endif

    {{-- 3 dots icon --}}
    <p class="inline cursor-pointer text-[25px] py-[10px] px-[30px] dotsAutor hover:text-[#606FC7]">
        <i class="fas fa-ellipsis-v"></i>
    </p>
    <div
        class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-autor">
        <div
            class="absolute right-0 w-56 mt-[2px] mr-[10px] origin-top-right bg-white border
            border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none">
            <div class="py-1">

                {{-- Edit --}}
                <a href="{{ route($resourcePlural . '.edit', $item) }}"
                    class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                    role="menuitem">
                    <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                    <span class="px-4 py-0">Edit {{ $resourceName }}</span>
                </a>

                {{-- Delete --}}
                <form action="{{ route($resourcePlural . '.destroy', $item) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="flex w-full px-4 py-2 text-sm leading-5 text-left
                    text-gray-700 outline-none border-0 hover:text-red-500">
                        <i class="fas fa-trash mr-[5px] ml-[5px] py-1"></i>
                        <span class="px-4 py-0">Destroy {{ $resourceName }}</span>
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
