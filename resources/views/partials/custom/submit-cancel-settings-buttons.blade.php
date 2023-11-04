<div class="flex justify-between">
    {{-- Submit button --}}
    <button
        class="btn-animation inline-flex items-center text-sm py-2.5 px-5
        transition duration-300 rounded-[5px] tracking-wider text-white
        bg-[#3f51b5] hover:bg-[#4558BE] mt-[20px]"
        type="submit">Submit</button>

    {{-- Cancel button --}}
    <a href="{{ url()->previous() }}"
        class="h-10 btn-animation shadow-lg mt-[20px] text-center w-[100px]
        focus:outline-none text-sm py-2.5 px-2.5 transition duration-300 ease-in
        bg-[#F44336] hover:bg-[#F55549] rounded-[5px] text-white">
        Cancel <i class="fas fa-times ml-[4px]"></i>
    </a>
</div>
