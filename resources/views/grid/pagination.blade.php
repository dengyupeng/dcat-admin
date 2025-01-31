<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
    <li class="page-item previous disabled"><span class="page-link">{{ __('admin.prev_page') }}</span></li>
    @else
    <li class="page-item previous"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">{{ __('admin.prev_page') }}</a></li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                @else
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
    <li class="page-item next"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">{{ __('admin.next_page') }}</a></li>
    @else
    <li class="page-item next disabled"><span class="page-link">{{ __('admin.next_page') }}</span></li>
    @endif
</ul>
