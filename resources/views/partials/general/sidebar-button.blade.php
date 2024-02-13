@foreach ($items as $item)
    <li class="pt-[18px] pb-[14px] group hover:bg-[#EAEAEA] h-[60px]">
        <div class="ml-[30px]">

            <span class="flex justify-between w-full whitespace-nowrap" title="{{ $item['title'] }}">
                <a href="{{ $item['href'] }}">

                    <i class="text-[22px] pt-[4px] pr-1 pb-[5px] {{ $item['icon'] }} group-hover:text-blue-600
                        @if (str_contains(request()->route()->getName(), strtolower($item['title'])))
                            text-[#576cdf] @else text-[#707070]@endif"></i>

                    <div class="hidden sidebar-item">
                        <p class="group-hover:text-blue-600 inline text-[15px] ml-[20px]">
                            {{ $item['title'] }}
                        </p>
                    </div>

                </a>
            </span>

        </div>
    </li>
@endforeach
