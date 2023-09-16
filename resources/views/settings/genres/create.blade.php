@extends('layouts.app')
@section('title', 'New genre')
@section('content')

    <form class="text-gray-700 forma" method="post" action="{{ route('genres.store') }}">
        @csrf
        @method('post')
        <div class="flex flex-row ml-[30px]">
            <div class="w-[50%]">

                {{-- Name --}}
                <div class="mt-[20px]">
                    <p>Name<span class="text-red-500">*</span></p>
                    <input type="text" name="name" required
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a genre name" />
                    @if ($errors->first('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
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

@endsection
