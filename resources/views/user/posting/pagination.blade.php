@if ($paginator->lastPage() > 1)
<div class="page-pagination">
    <nav aria-label="Pagination">
        <ul class="pagination">
            {{-- <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
            </li> --}}
            {{-- <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
            </li> --}}
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
                @endfor

                {{-- <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}">3</a>
                </li> --}}
                {{-- <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-chevron-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </li> --}}
        </ul>
    </nav>
</div>
@endif
