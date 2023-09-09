@extends('layouts.app')
@section('title', 'Edit category')
@section('content')

    <form class="text-gray-700" method="post" action="{{ route('categories.update', $category) }}">
        @csrf
        @method('put')
        <div class="flex flex-row ml-[30px]">
            <input hidden type="number" name="id" value="{{ $category->id }}" />
            <div class="w-[30%] mb-[50px]">
                <p>Category name<span class="text-red-500">*</span></p>
                <input type="text" name="name" required value="{{ $category->name }}"
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

    <div class="flex flex-row ml-[30px]">
        <form action="{{ route('categories.destroy', $category) }}" method="post">
            @csrf
            @method('delete')
            <button class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mt-[20px]"
                type="submit">Delete</button>
            </button>
        </form>
    </div>

@endsection
