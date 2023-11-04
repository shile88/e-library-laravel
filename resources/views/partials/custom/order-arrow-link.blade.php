{{-- Order by arrow link --}}
<a
    href="{{ route($resourcePlural . '.index', [
        'orderBy' => 'name',
        'orderDir' => request()->get('orderDir') == 'desc' ? 'asc' : 'desc',
        'rowsPerPage' => request()->get('rowsPerPage'),
        'searchTerm' => request()->get('searchTerm'),
        'page' => request()->get('page'),
        'rowsPerPage' => request()->get('rowsPerPage'),
    ]) }}">

    <i
        class="ml-3 fa-lg fas
        {{ request()->get('orderDir') == 'desc' ? 'fa-long-arrow-alt-up' : 'fa-long-arrow-alt-down' }}">
    </i>
</a>
