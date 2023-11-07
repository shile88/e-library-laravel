{{-- Title Header --}}
@if (isset($hasTitleHeader) && $hasTitleHeader == true)

    <div class="heading border-b-[1px] border-[#e4dfdf]">

        {{-- Set margins and padding whether $breadrumbs is set or not --}}
        <div class="pl-[30px] @if (isset($breadcrumbs))py-[11px]@else mt-[22px] mb-[23px]@endif
            {{-- Add necessary flex classes if header has dropdown --}}
            @if(isset($hasDropdown) && $hasDropdown == true)flex justify-between @endif">
            <div>
                {{-- Title --}}
                <h1>{{ $title }}</h1>

                {{-- Breadcrumbs --}}
                @if (isset($breadcrumbs))
                    <div>
                        <nav class="w-full rounded">
                            <ul class="flex list-reset">

                                <li>
                                    <a href="{{ route('dashboard') }}" class="text-[#2196f3] hover:text-blue-600">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <span class="mx-1"> > </span>
                                </li>

                                @foreach ($breadcrumbs as $id => $breadcrumb)
                                    <li>
                                        <a href="{{ $breadcrumb['href'] }}" class="text-[#2196f3] hover:text-blue-600">
                                            {{ $breadcrumb['name'] }}
                                        </a>

                                        {{-- Add ">" separator if not at the end of the array --}}
                                        @if (!$loop->last)
                                            <span class="mx-1"> > </span>
                                        @endif
                                    </li>

                                @endforeach
                            </ul>
                        </nav>
                    </div>
                @endif
            </div>

            {{-- Dropdown options --}}
            @yield('dropdown-options')

        </div>
    </div>
@endif
