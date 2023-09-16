@extends('layouts.app')
@section('title', 'Edit category')
@section('content')

    <form class="text-gray-700" method="post" action="{{ route('categories.update', $category) }}">
        @csrf
        @method('put')
        <div class="flex flex-row ml-[30px]">
            <div class="w-[50%]">
                {{-- We need this field to go into CategoryStoreRequest for duplicate validation --}}
                <input hidden type="number" name="id" value="{{ $category->id }}" />

                {{-- Name --}}
                <div class="mt-[20px]">
                    <p>Name<span class="text-red-500">*</span></p>
                    <input type="text" name="name" required value="{{ $category->name }}"
                        class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300
                                   shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                        placeholder="Enter a category name" />

                    @if ($errors->first('name'))
                        <p class="text-red-600 mt-[5px]">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                {{-- Icon --}}
                <div class="mt-[20px]">
                <p>Icon</p>
                    <ul>
                        <li>
                            <input type="radio" name="icon" value="fas fa-palette"
                                @if ($category->icon === 'fas fa-palette') checked @endif>
                            <i class="mr-[5px] fas fa-palette"></i>Palette
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-address-book"
                                @if ($category->icon === 'fas fa-address-book') checked @endif>
                            <i class="mr-[5px] fas fa-address-book"></i>Address book
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-children"
                                @if ($category->icon === 'fas fa-children') checked @endif>
                            <i class="mr-[5px] fas fa-children"></i>Children
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-screwdriver-wrench"
                                @if ($category->icon === 'fas fa-screwdriver-wrench') checked @endif>
                            <i class="mr-[5px] fas fa-screwdriver-wrench"></i>Screwdriver wrench
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-gun"
                                @if ($category->icon === 'fas fa-gun') checked @endif>
                            <i class="mr-[5px] fas fa-gun"></i>Gun
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-burger"
                                @if ($category->icon === 'fas fa-burger') checked @endif>
                            <i class="mr-[5px] fas fa-burger"></i>Burger
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-tv"
                                @if ($category->icon === 'fas fa-tv') checked @endif>
                            <i class="mr-[5px] fas fa-tv"></i>TV
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-calendar-day"
                                @if ($category->icon === 'fas fa-calendar-day') checked @endif>
                            <i class="mr-[5px] fas fa-calendar-day"></i>Calendar day
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-brain"
                                @if ($category->icon === 'fas fa-brain') checked @endif>
                            <i class="mr-[5px] fas fa-brain"></i>Brain
                        </li>
                        <li>
                            <input type="radio" name="icon" value="fas fa-rocket"
                                @if ($category->icon === 'fas fa-rocket') checked @endif>
                            <i class="mr-[5px] fas fa-rocket"></i>Rocket
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
                        appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]">{{ $category->description }}</textarea>
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
        <form action="{{ route('categories.destroy', $category) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn-animation inline-flex items-center text-sm py-2.5 px-5 transition duration-300
            ease-in rounded-[5px] tracking-wider text-white bg-[#F44336] hover:bg-[#F55549] mt-[20px]"
                type="submit">Delete</button>
            </button>
        </form>
    </div>

@endsection
