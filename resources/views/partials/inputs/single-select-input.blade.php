<div class="mt-[20px]">
    <p>{{ $label }}<span class="text-red-500">*</span></p>

    <select required name="{{ $field_name }}"
        class="w-[90%] p-1 mt-2 py-2.5 bg-white border border-gray-300">
        <option value="" disabled selected hidden>{{ $placeholder }}</option>

        @foreach ($items as $item)
            <option @if ($item->id == old($field_name)) selected @endif value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endforeach

    </select>

    @if ($errors->first($field_name))
        <p class="text-red-600">{{ $errors->first($field_name) }}</p>
    @endif
</div>
