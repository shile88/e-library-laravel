<a
    href="{{ route($plural . '.index', [
        'orderBy' => 'name',
        'orderDir' => request()->get('orderDir') == 'desc' ? 'asc' : 'desc',
        'rowsPerPage' => request()->get('rowsPerPage'),
        'searchTerm' => request()->get('searchTerm'),
        'page' => request()->get('page'),
        'rowsPerPage' => request()->get('rowsPerPage'),
    ]) }}">

    <i
        class="ml-3 fa-lg fas
        {{ request()->get('orderDir') == 'asc' ? 'fa-long-arrow-alt-down' : 'fa-long-arrow-alt-up' }}">
    </i>
</a>
