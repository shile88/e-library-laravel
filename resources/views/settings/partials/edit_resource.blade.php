{{-- Form --}}
<form class="text-gray-700" method="post" action="{{ route($resourcePlural . '.update', $resource) }}">
    @csrf
    @method('put')
    <div class="flex flex-row ml-[30px]">
        <div class="w-[30%]">
            {{-- We need this field to go into StoreRequest for duplicate validation --}}
            <input hidden type="number" name="id" value="{{ $resource->id }}" />

            {{-- Name --}}
            <div class="mt-[20px]">
                <p>Name <span class="text-red-500">*</span></p>
                <input type="text" name="name" required value="{{ $resource->name }}"
                    class="flex w-[100%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                    placeholder="{{ 'Enter a ' . $resourceName . ' name' }}" />

                @if ($errors->first('name'))
                    <p class="text-red-500 mt-[5px]">{{ $errors->first('name') }}</p>
                @endif
            </div>

            {{-- Description --}}
            @if (isset($hasDescription) && $hasDescription == true)
                <div class="mt-[20px]">
                    <p class="inline-block mb-2">Description</p>

                    <textarea id="message" name="description" rows="10"
                        class="block p-2 w-full text-gray-900 bg-white border border-gray-300
                        focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter description">{{ $resource->description }}</textarea>

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
