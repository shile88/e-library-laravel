@extends('layouts.app')
@section('title', 'Edit script')
@section('content')

    <form class="text-gray-700" method="POST" action="{{ route('scripts.update', $script) }}">
        @csrf
        @method('PUT')
        <div class="flex flex-row ml-[30px]">
            <div class="w-[50%]">
                <input hidden type="number" name="id" value="{{ $script->id }}" />

                {{-- Name --}}
                <div class="mt-[20px]">
                    <p>Name<span class="text-red-500">*</span></p>
                    <input type="text" name="name" required value="{{ $script->name }}"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                                   shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a script name" />

                    @if ($errors->first('name'))
                        <p class="text-red-600 mt-[5px]">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                {{-- Submit button --}}
                <button
                    class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300
                    rounded-[5px] tracking-wider text-white bg- bg-[#3f51b5] hover:bg-[#4558BE] mt-[20px]"
                    type="submit">Submit</button>
            </div>
        </div>
    </form>

    {{-- Delete button --}}
    <div class="flex flex-row ml-[30px]">
        <form action="{{ route('scripts.destroy', $script) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300
            ease-in rounded-[5px] tracking-wider text-white bg-[#F44336] hover:bg-[#F55549] mt-[20px]"
                type="submit">Delete</button>
            </button>
        </form>
    </div>

@endsection
