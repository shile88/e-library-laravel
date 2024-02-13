{{-- Form --}}
<form class="text-gray-700 forma" method="post" action="{{ route($resourcePlural . '.store') }}">
    @csrf
    @method('post')
    <div class="flex flex-row ml-[30px]">
        <div class="w-[30%]">

            {{-- Name input --}}
            <div class="mt-[20px]">
                <p>Name <span class="text-red-500">*</span></p>
                <input required type="text" name="name"  value="{{ old('name') }}"
                    class="flex w-[100%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                        shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                    placeholder="{{ 'Enter a ' . $resourceName . ' name' }}" />
                @if ($errors->first('name'))
                    <span class="text-red-500">{{ $errors->first('name') }}</span>
                @endif
            </div>

            {{-- Icon input --}}
            @if (isset($hasIcon) && $hasIcon == true)
                <div class="mt-[20px]">
                    <p>Icon</span></p>

                    <input type="text" name="icon" value="{{ old('icon') }}"
                        class="flex w-[100%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                                    shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="{{ 'Enter a ' . $resourceName . ' icon (from FontAwesome library)' }}" />

                    @if ($errors->first('icon'))
                        <span class="text-red-500">{{ $errors->first('icon') }}</span>
                    @endif
                </div>
            @endif

            {{-- Description input --}}
            @if (isset($hasDescription) && $hasDescription == true)
                <div class="mt-[20px]">
                    <p class="inline-block mb-2">Description</p>

                    <textarea id="message" name="description" rows="10"
                        class="block p-2 w-full text-gray-900 bg-white border border-gray-300
                        appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a {{ $resourceName }} description">{{ old('description') }}</textarea>

                    @if ($errors->first('description'))
                        <p class="text-red-500 mt-[5px]">{{ $errors->first('description') }}</p>
                    @endif
                </div>
            @endif

            {{-- Buttons --}}
            @include('partials.custom.submit-cancel-settings-buttons')

        </div>
    </div>
</form>
