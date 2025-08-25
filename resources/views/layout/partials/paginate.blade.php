@if ($paginator->hasPages())
<style>
    .custom-pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding-left: 0;
        gap: 6px;
        /* jarak antar tombol */
    }

    .custom-pagination .page-link {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        border: 1px solid #ddd;
        background-color: white;
        color: #000;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .custom-pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .custom-pagination .page-link:hover {
        background-color: #f1f1f1;
    }

    .custom-pagination .page-item.disabled .page-link {
        color: #aaa;
        background-color: #f9f9f9;
        cursor: not-allowed;
    }
</style>

<nav>
    <ul class="custom-pagination">

        {{-- Tombol First --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">&laquo;&laquo;</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url(1) }}">&laquo;&laquo;</a>
        </li>
        @endif

        {{-- Tombol Previous --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">&laquo;</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        </li>
        @endif

        {{-- Nomor Halaman --}}
        @foreach ($elements as $element)
        @if (is_string($element))
        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
        @endif

        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active">
            <span class="page-link">{{ $page }}</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Tombol Next --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link">&raquo;</span>
        </li>
        @endif

        {{-- Tombol Last --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">&raquo;&raquo;</a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link">&raquo;&raquo;</span>
        </li>
        @endif

    </ul>
</nav>
@endif