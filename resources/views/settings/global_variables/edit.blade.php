@extends('layouts.app')
@section('title', 'Edit global variable')
@section('content')

    <form class="text-gray-700 forma" method="post" action="{{ route('global_variables.update', $globalVariable) }}">
        @csrf
        @method('put')
        <div class="flex flex-row ml-[30px]">
            <div class="w-[50%]">
                {{-- We need this field to go into UpdateRequest for duplicate validation --}}
                <input hidden type="number" name="id" value="{{ $globalVariable->id }}" />

                {{-- Display name --}}
                <div class="mt-[20px]">
                    <p>Display name<span class="text-red-500">*</span></p>
                    <input type="text" name="name" required value="{{ $globalVariable->name }}"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable display name" />
                    @if ($errors->first('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                {{-- Variable name --}}
                <div class="mt-[20px]">
                    <p>Variable name<span class="text-red-500">*</span></p>
                    <input type="text" name="variable_name" required value="{{ $globalVariable->variable_name }}"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable name (eg. books_per_student)" />
                    @if ($errors->first('variable_name'))
                        <span class="text-red-600">{{ $errors->first('variable_name') }}</span>
                    @endif
                </div>

                {{-- Value --}}
                <div class="mt-[20px]">
                    <p>Value<span class="text-red-500">*</span></p>
                    <input type="number" name="value" required value="{{ $globalVariable->value }}"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable value" />
                    @if ($errors->first('value'))
                        <span class="text-red-600">{{ $errors->first('value') }}</span>
                    @endif
                </div>

                {{-- Unit --}}
                <div class="mt-[20px]">
                    <p>Unit<span class="text-red-500">*</span></p>
                    <input type="text" name="unit" required value="{{ $globalVariable->unit }}"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                               shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a variable unit (eg. day, book, year)" />
                    @if ($errors->first('unit'))
                        <span class="text-red-600">{{ $errors->first('unit') }}</span>
                    @endif
                </div>

                {{-- Description --}}
                <div class="mt-[20px]">
                    <p class="inline-block">Description<span class="text-red-500">*</span></p>
                    <textarea name="description" required rows="5" placeholder="Write a variable description"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm
                        appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]">{{ $globalVariable->description }}</textarea>
                    @if ($errors->first('description'))
                        <span class="text-red-600">{{ $errors->first('description') }}</span>
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
        <form action="{{ route('global_variables.destroy', $globalVariable) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300
            ease-in rounded-[5px] tracking-wider text-white bg-[#F44336] hover:bg-[#F55549] mt-[20px]"
                type="submit">Delete</button>
            </button>
        </form>
    </div>

@endsection
