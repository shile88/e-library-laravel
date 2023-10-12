<div class="absolute bottom-0 w-full">
    <div class="flex flex-row">
        <div class="inline-block w-full text-white text-right py-[7px] mr-[100px]">
            {{-- Submit button --}}
            <button
                class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300 rounded-[5px] tracking-wider text-white bg- bg-[#3f51b5] hover:bg-[#4558BE] mt-[20px]"
                type="submit">Submit</button>

            <a href="{{ url()->previous() }}"
                class="btn-animation shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                Cancel <i class="fas fa-times ml-[4px]"></i>
            </a>
        </div>
    </div>
</div>
