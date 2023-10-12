{{-- Header --}}
<div class="heading border-b-[1px] border-[#e4dfdf]">
    <div class="pl-[30px] mt-[22px] mb-[23px]">
        <h1>@yield('title')</h1>
    </div>
</div>

{{-- Form --}}
<form class="text-gray-700 forma" method="post" action="{{ route($resourcePlural . '.store') }}">
    @csrf
    @method('post')
    <div class="flex flex-row ml-[30px]">
        <div class="w-[50%]">

            {{-- Name --}}
            <div class="mt-[20px]">
                <p>Name <span class="text-red-500">*</span></p>
                <input type="text" name="name" required
                    class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                        shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                    placeholder="{{ 'Enter a ' . $resourceName . ' name' }}" />
                @if ($errors->first('name'))
                    <span class="text-red-500">{{ $errors->first('name') }}</span>
                @endif
            </div>

            {{-- Description --}}
            @if (isset($hasDescription))
                <div class="mt-[20px]">
                    <p class="inline-block mb-2">Description</p>

                    <textarea id="message" name="description" rows="10"
                        class="block p-2.5 w-full text-gray-900 bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter description"></textarea>
                    @if ($errors->first('description'))
                        <p class="text-red-500 mt-[5px]">{{ $errors->first('description') }}</p>
                    @endif
                </div>
            @endif

            {{-- Submit button --}}
            <button
                class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300
            rounded-[5px] tracking-wider text-white bg- bg-[#3f51b5] hover:bg-[#4558BE] mt-[20px]"
                type="submit">Submit</button>
        </div>
    </div>
</form>
