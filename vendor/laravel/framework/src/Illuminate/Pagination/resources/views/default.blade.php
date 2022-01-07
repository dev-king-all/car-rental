@if ($paginator->hasPages())
    <nav>
        <div style = "float:left;">
            <p class="text-sm text-gray-700 leading-5">
                {!! __('Showing') !!}
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>
        <ul class="pagination" style= "justify-content: right; margin-top: 20px;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled paginate_button page-item previous disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class = "page-link" aria-hidden="true">&lsaquo;</a>
                </li>
            @else
                <li class = "paginate_button page-item previous">
                    <a class = "page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><a class = "page-link" style = "border: none; padding-left: 5px; padding-right: 5px; ">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active paginate_button page-item" aria-current="page"><a class = "page-link">{{ $page }}</a></li>
                        @else
                            <li><a class = "page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class = "page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class = "page-link" aria-hidden="true">&rsaquo;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
