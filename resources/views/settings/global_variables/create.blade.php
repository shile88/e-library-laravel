@extends('layouts.app')
@section('title', 'New global variable')
@section('content')
    {{-- Header --}}
    <div class="heading border-b-[1px] border-[#e4dfdf]">
        <div class="pl-[30px] mt-[22px] mb-[23px]">
            <h1>@yield('title')</h1>
        </div>
    </div>

    <form class="text-gray-700 forma" method="post" action="{{ route('global_variables.store') }}">
        @csrf
        @method('post')
        <div class="flex flex-row ml-[30px]">
            <div class="w-[50%]">

                {{-- Display name --}}
                <div class="mt-[20px]">
                    <p>Display name <span class="text-red-500">*</span></p>
                    <input type="text" name="name" required
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable display name" />
                    @if ($errors->first('name'))
                        <span class="text-red-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                {{-- Variable name --}}
                <div class="mt-[20px]">
                    <p>Variable name <span class="text-red-500">*</span></p>
                    <input type="text" name="variable_name" required
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable name (eg. books_per_student)" />
                    @if ($errors->first('variable_name'))
                        <span class="text-red-500">{{ $errors->first('variable_name') }}</span>
                    @endif
                </div>

                {{-- Value --}}
                <div class="mt-[20px]">
                    <p>Value <span class="text-red-500">*</span></p>
                    <input type="number" name="value" required
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable value" />
                    @if ($errors->first('value'))
                        <span class="text-red-500">{{ $errors->first('value') }}</span>
                    @endif
                </div>

                {{-- Unit --}}
                <div class="mt-[20px]">
                    <p>Unit <span class="text-red-500">*</span></p>
                    <input type="text" name="unit" required
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable unit (eg. day, book, year)" />
                    @if ($errors->first('unit'))
                        <span class="text-red-500">{{ $errors->first('unit') }}</span>
                    @endif
                </div>

                {{-- Description --}}
                <div class="mt-[20px]">
                    <p class="inline-block">Description <span class="text-red-500">*</span></p>
                    <textarea name="description" required rows="5" placeholder="Write a variable description"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm
                        appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"></textarea>
                    @if ($errors->first('description'))
                        <span class="text-red-500">{{ $errors->first('description') }}</span>
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
