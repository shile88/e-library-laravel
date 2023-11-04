{{-- Title Header --}}
@if (isset($hasTitleHeader) && $hasTitleHeader == true)

    <div class="heading border-b-[1px] border-[#e4dfdf]">
        {{-- Set margins and padding whether $breadrumbs is set or not --}}
        @if (isset($breadcrumbs))
            <div class="pl-[30px] py-[11px]">
        @else
            <div class="pl-[30px] mt-[22px] mb-[23px]">
        @endif

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
                                <span class="mx-1">></span>
                            </li>

                            @foreach ($breadcrumbs as $id => $breadcrumb)
                                <li>
                                    <a href="{{ $breadcrumb['href'] }}" class="text-[#2196f3] hover:text-blue-600">
                                        {{ $breadcrumb['name'] }}
                                    </a>
                                </li>

                                {{-- Add "/" separator if not at the end of the array --}}
                                @if (sizeof($breadcrumbs) - 1 != $id)
                                    <li>
                                        <span class="mx-1">></span>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                    </nav>
                </div>
            @endif

        </div>
    </div>
@endif
