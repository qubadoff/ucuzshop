@if ($paginator->hasPages())
    <div class="product-pagination-area mt--20">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <button class="prev" disabled><i class="far fa-long-arrow-left"></i></button>
        @else
            <button class="prev"><a href="{{ $paginator->previousPageUrl() }}"><i class="far fa-long-arrow-left"></i></a></button>
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <button class="skip-number" disabled>{{ $element }}</button>
            @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="number active" disabled>{{ $page }}</button>
                    @else
                        <button class="number"><a href="{{ $url }}">{{ $page }}</a></button>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <button class="next"><a href="{{ $paginator->nextPageUrl() }}"><i class="far fa-long-arrow-right"></i></a></button>
        @else
            <button class="next" disabled><i class="far fa-long-arrow-right"></i></button>
        @endif
    </div>
@endif
