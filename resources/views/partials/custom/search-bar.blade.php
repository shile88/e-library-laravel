<div class="flex items-center py-4 space-x-3 rounded-lg justify-between ml-[30px]">
    {{-- Create new item --}}
    @if(auth()->user()->role_id != 3)
        <a href="{{ route($resourcePlural . '.create') }}"
           class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300 rounded-[5px] tracking-wider text-white bg-[#3f51b5] hover:bg-[#4558BE]">
            <i class="fas fa-plus mr-[15px]"></i>New {{ $resourceName }}
        </a>
    @endif

    {{-- Search --}}
    <form action="{{ route($resourcePlural . '.index') }}" method="get">
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
                class="py-2 pl-10 text-sm text-black bg-white border-2 border-gray-300 border-solid rounded-md
                focus:outline-none focus:bg-white focus:text-black"
                placeholder="Search" autocomplete="off">
        </div>
    </form>
</div>

@if (isset($resultsCount))
    <div class="ml-[30px] text-sm">
        Number of results: {{ $resultsCount }}
    </div>
@endif
