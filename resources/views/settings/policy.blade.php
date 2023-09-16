@extends('settings.index')

@section('title', 'Policy')

@section('main-settings')

    <form method="post" action="#">
        @csrf
        @method('PATCH')
        <div class="section- mt-[5px]">
            <div class="flex flex-col">
                <div class="flex border-b-[1px] border-[#e4dfdf] pb-[20px] pl-[30px]">
                    <div>
                        <h3>Period for checkouts</h3>
                        <p class="pt-[15px] max-w-[400px]">
                            This value defines the time in days, a book can be checked out for a student. After this period
                            the checkout will be overdue.
                        </p>
                        <p class="pt-[15px] max-w-[400px]">
                            Current value: xxx day(s)
                        </p>
                    </div>
                    <div class="relative flex ml-[60px] mt-[20px]">
                        <input type="number" name="holding_time" value="xxx"
                            class="h-[50px] flex-1 w-full px-4 py-2 mt-[20px] text-sm text-gray-700 placeholder-gray-400
                               bg-white border-[1px]  border-[#e4dfdf]  rounded-lg shadow-sm appearance-none
                               focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" />
                        <p class="ml-[10px] mt-[35px]">day(s)</p>
                    </div>
                </div>
                <div class="mt-[20px] flex border-b-[1px] border-[#e4dfdf] pb-[20px] pl-[30px]">
                    <div>
                        <h3>Period for reservations</h3>
                        <p class="pt-[15px] max-w-[400px]">
                            This value defines the time in days, a book can be reserved for a student. In this period a
                            student can check out the book. After this period the reservation will be canceled.
                        </p>
                        <p class="pt-[15px] max-w-[400px]">
                            Current value: xxx day(s)
                        </p>
                    </div>
                    <div class="relative flex ml-[60px] mt-[20px]">
                        <input type="number" name="reservation_time" value="xxx"
                            class="h-[50px] flex-1 w-full px-4 py-2 mt-[20px] text-sm text-gray-700 placeholder-gray-400
                               bg-white border-[1px]  border-[#e4dfdf]  rounded-lg shadow-sm appearance-none
                               focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" />
                        <p class="ml-[10px] mt-[35px]">day(s)</p>
                    </div>
                </div>
                <div class="mt-[20px] flex border-b-[1px] border-[#e4dfdf] pb-[20px] pl-[30px]">
                    <div>
                        <h3>
                            Books per student
                        </h3>
                        <p class="pt-[15px] max-w-[400px]">
                            This value defines a number of books that can be checked out or reserved for a student.
                        </p>
                        <p class="pt-[15px] max-w-[400px]">
                            Current value: xxx book(s)
                        </p>
                    </div>
                    <div class="relative flex ml-[60px] mt-[20px]">
                        <input type="number" name="books_per_student" value="xxx"
                            class="h-[50px] flex-1 w-full px-4 py-2 mt-[20px] text-sm text-gray-700 placeholder-gray-400
                               bg-white border-[1px]  border-[#e4dfdf]  rounded-lg shadow-sm appearance-none
                               focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" />
                        <p class="ml-[10px] mt-[35px]">book(s)</p>
                    </div>
                </div>

                {{-- Submit button --}}
                <button type="submit"
                    class="btn-animation shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm ml-[30px]
                    py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#4558BE] bg-[#3f51b5] text-white mt-[30px]">Submit</button>

            </div>
        </div>
    </form>

@endsection
