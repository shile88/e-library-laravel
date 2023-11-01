{{-- Pagination --}}
<div class="mt-2">
    {{ $items->links() }}
</div>

{{-- Rows per page form --}}
<div class="inline-flex items-center w-full justify-end mt-4">
    <div>

        Rows per page:
        <form class="inline-flex" action="{{ route($plural . '.index') }}">
            <input type="hidden" name="orderBy" value="{{ request()->get('orderBy') }}">
            <input type="hidden" name="orderDir" value="{{ request()->get('orderDir') }}">
            <input type="hidden" name="searchTerm" value="{{ request()->get('searchTerm') }}">
            <input type="hidden" name="page" value="{{ request()->get('page') }}">

            <select onchange="this.form.submit()" name="rowsPerPage"
                class="ml-2 pl-2 w-[60px] border bg-white border-gray-300 shadow-sm focus:outline-none
                focus:ring-2 focus:ring-[#576cdf]">
                <option value="5" {{ request()->get('rowsPerPage') == 5 ? 'selected' : '' }}>5</option>
                <option value="7" {{ request()->get('rowsPerPage') == 7 ? 'selected' : 'selected' }}>7</option>
                <option value="10" {{ request()->get('rowsPerPage') == 10 ? 'selected' : '' }}>10</option>
            </select>
        </form>

    </div>
</div>
