@extends('layouts.app')
@section('title', 'New category')
@section('content')

    <form class="text-gray-700 forma" method="post" action="{{ route('categories.store') }}">
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
                        placeholder="Enter a category name" />
                    @if ($errors->first('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                {{-- Icon --}}
                <div class="mt-[20px]">
                    <p>Icon</p>
                    <ul>
                        <li>
                            <input type="radio" name="icon" value="fas fa-palette">
                            <i class="mr-[5px] fas fa-palette"></i>&nbsp; Palette
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-address-book">
                            <i class="mr-[5px] fas fa-address-book"></i>&nbsp; Address book
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-children">
                            <i class="mr-[5px] fas fa-children"></i>&nbsp; Children
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-screwdriver-wrench">
                            <i class="mr-[5px] fas fa-screwdriver-wrench"></i>&nbsp; Screwdriver wrench
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-gun">
                            <i class="mr-[5px] fas fa-gun"></i>&nbsp; Gun
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-burger">
                            <i class="mr-[5px] fas fa-burger"></i>&nbsp; Burger
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-tv">
                            <i class="mr-[5px] fas fa-tv"></i>&nbsp; TV
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-calendar-day">
                            <i class="mr-[5px] fas fa-calendar-day"></i>&nbsp; Calendar day
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-brain">
                            <i class="mr-[5px] fas fa-brain"></i>&nbsp; Brain
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-rocket">
                            <i class="mr-[5px] fas fa-rocket"></i>&nbsp; Rocket
                        </li>
                    </ul>

                    @if ($errors->first('icon'))
                        <span class="text-red-600">{{ $errors->first('icon') }}</span>
                    @endif
                </div>

                {{-- Description --}}
                <div class="mt-[20px]">
                    <p class="inline-block">Description</p>
                    <textarea name="description" rows="5" placeholder="Write a category description"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm
                        appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"></textarea>
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
