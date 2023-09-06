@extends('layouts.app')
@section('title', 'New category')
@section('content')

    <form class="text-gray-700 forma" method="post" action="{{ route('categories.store') }}">
        @csrf
        @method('post')
        <div class="flex flex-row ml-[30px]">
            <div class="w-[30%] mb-[50px]">
                <p>Category name <span class="text-red-500">*</span></p>
                <input type="text" name="name" required
                    class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                                   shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                    placeholder="Enter a category name" />

                @if ($errors->first('name'))
                    <p class="text-red-600 mt-[5px]">{{ $errors->first('name') }}</p>
                @endif
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-[20px]"
                    type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection
