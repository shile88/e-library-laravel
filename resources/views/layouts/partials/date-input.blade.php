<div class="mt-[20px]">
    <p>{{ $label }}<span class="text-red-500">*</span></p>
    
    <input required type="date" name="{{ $field_name }}" value="{{ old($field_name) }}"
        class="w-[90%] mt-2 px-2 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#576cdf]" />

    @if ($errors->first($field_name))
        <p class="text-red-600">{{ $errors->first($field_name) }}</p>
    @endif
</div>
