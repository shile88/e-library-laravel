<nav class="fixed z-10 flex flex-col justify-between overflow-x-hidden overflow-y-auto bg-[#EFF3F6] sidebar nav-height"
    id="sidebar">
    <div class="">

        {{-- Hamburger Icon --}}
        <div
            class="cursor-pointer text-[#707070] pl-[30px] pt-[28px] pb-[27px] text-[25px] border-b-[1px] border-[#e4dfdf] ">
            <i id="hamburger" class="fas fa-bars"></i>
        </div>

        {{-- Links --}}
        <div>
            <ul class="text-[#2D3B48] sidebar-nav">

                @include('partials.general.sidebar-button', [
                    'items' => [
                        [
                            'title' => 'Books',
                            'href' => route('books.index'),
                            'icon' => 'fas fa-book',
                        ],
                        [
                            'title' => 'Dashboard',
                            'href' => route('dashboard'),
                            'icon' => 'fas fa-chart-line',
                        ],
                        [
                            'title' => 'Authors',
                            'href' => route('authors.index'),
                            'icon' => 'fas fa-user-pen',
                        ],
                        [
                            'title' => 'Students',
                            'href' => route('books.index'),
                            'icon' => 'fas fa-user-graduate',
                        ],
                        [
                            'title' => 'Transactions',
                            'href' => route('books.index'),
                            'icon' => 'fas fa-repeat',
                        ],
                        [
                            'title' => 'Librarians',
                            'href' => route('books.index'),
                            'icon' => 'fas fa-user-tie',
                        ],
                        [
                            'title' => 'Admins',
                            'href' => route('books.index'),
                            'icon' => 'fas fa-user-shield',
                        ],
                    ],
                ])

            </ul>
        </div>
    </div>

    {{-- Settings icon --}}
    <div class="sidebar-nav py-[10px] border-t-[1px] border-[#e4dfdf] pt-[23px] pb-[29px] hover:bg-[#EAEAEA]">
        <ul>

            <li class="pt-[18px] pb-[14px] group hover:bg-[#EAEAEA] h-[60px]">
                <div class="ml-[30px]">
                    <span class="flex justify-between w-full whitespace-nowrap" title="Settings">
                        <a href="{{ route('settings.index') }}">
                            <i class="text-[22px] pt-[4px] pr-1 pb-[5px] fas fa-cog group-hover:text-blue-600
                            @if (str_contains(request()->route()->getName(),'settings') ||
                                str_contains(request()->route()->getName(), 'global_variables')||
                                str_contains(request()->route()->getName(), 'categories')||
                                str_contains(request()->route()->getName(), 'genres')||
                                str_contains(request()->route()->getName(), 'languages')||
                                str_contains(request()->route()->getName(), 'publishers')||
                                str_contains(request()->route()->getName(), 'bindings')||
                                str_contains(request()->route()->getName(), 'sizes')||
                                str_contains(request()->route()->getName(), 'scripts'))
                            text-[#576cdf] @else text-[#707070]@endif"></i>

                            <div class="hidden sidebar-item">
                                <p class="group-hover:text-blue-600 inline text-[15px] ml-[20px]">
                                    Settings
                                </p>
                            </div>
                        </a>
                    </span>
                </div>
            </li>

        </ul>
    </div>
</nav>
