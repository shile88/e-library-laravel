<div class="mt-[20px]">
    <p>{{ $label }}<span class="text-red-500">*</span></p>

    <select required multiple name="{{ $resourcePlural }}[]" placeholder="{{ $placeholder }}"
        class="w-[90%] mt-2 focus:outline-none multiple-select">

        @foreach ($items as $item)
            <option @if (old($resourcePlural) and in_array($item->id, old($resourcePlural)))
                 selected @endif value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endforeach

    </select>

    @if ($errors->first($resourcePlural))
        <p class="text-red-600">{{ $errors->first($resourcePlural) }}</p>
    @endif

</div>

