@if ($paginator->hasPages())
    <ul class="pagination flex-m flex-w p-t-26">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><a class="item-pagination flex-c-m trans-0-4"  >&lsaquo;</a></li>
        @else
            <li><a class="item-pagination flex-c-m trans-0-4" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a></li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span class="page-link">{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="{{ $url }}" class="item-pagination flex-c-m trans-0-4 active-pagination">{{ $page }}</a></li>
                    @else
                        <li><a class="item-pagination flex-c-m trans-0-4" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a class="item-pagination flex-c-m trans-0-4" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a></li>
        @else
            <li><a class="item-pagination flex-c-m trans-0-4">&rsaquo;</a></li>
        @endif
    </ul>
@endif
