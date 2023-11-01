{{-- Pagination --}}
<div class="mt-2">
    {{ $items->links() }}
</div>

{{-- Rows per page form --}}
<div class="inline-flex items-center w-full justify-end mt-4">
    <div>
        Rows per page:
        <form class="inline-flex" action="{{ route($plural . '.index') }}">
            <select
                class="ml-2 pl-2 w-[60px] border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]"
                onchange="this.form.submit()" name="rowsPerPage">
                <option value="5" {{ request()->get('rowsPerPage') == 5 ? 'selected' : '' }}>5</option>
                <option value="7" {{ request()->get('rowsPerPage') == 7 ? 'selected' : '' }}>7</option>
                <option value="10" {{ request()->get('rowsPerPage') == 10 ? 'selected' : '' }}>10</option>
            </select>
        </form>
    </div>
</div>
