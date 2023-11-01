<div class="mt-[20px]">
    <p>{{ $label }}<span class="text-red-500">*</span></p>

    <select required multiple name="{{ $plural }}[]" placeholder="{{ $placeholder }}"
        class="w-[90%] mt-2 focus:outline-none multiple-select">

        @foreach ($items as $item)
            <option @if (old($plural) and in_array($item->id, old($plural)))
                 selected @endif value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endforeach

    </select>

    @if ($errors->first($plural))
        <p class="text-red-600">{{ $errors->first($plural) }}</p>
    @endif
</div>
