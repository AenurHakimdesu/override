@extends('layout.mainlayout')

@section('content')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Galeri</h2>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">

        {{-- ==== FOTO BERDASARKAN ALBUM ==== --}}
        @foreach($albums as $album)
        <h4 class="mb-3">{{ $album->name }} <small class="text-muted">({{ $album->lokasi }})</small></h4>
        <div class="row g-3 mb-5">
            @foreach($album->photos as $f)
            @php $path = str_replace('\\','/',$f->foto); @endphp
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('storage/'.$path) }}"
                    alt="{{ $album->name }}"
                    class="img-fluid rounded shadow-sm w-100"
                    style="height:200px;object-fit:cover;cursor:pointer;"
                    data-bs-toggle="modal"
                    data-bs-target="#fotoModal"
                    data-img="{{ asset('storage/'.$path) }}"
                    data-title="{{ $album->name }} ({{ $album->lokasi }})">
            </div>
            @endforeach
        </div>
        @endforeach

        {{-- ==== VIDEO ==== --}}
        <h4 class="mb-3">Video</h4>
        <div class="row g-3">
            @foreach($videos as $v)
            @php
            $ytId = null;
            if (preg_match('/youtu\.be\/([A-Za-z0-9_-]{11})/i', $v->url, $m)) $ytId = $m[1];
            elseif (preg_match('/v=([A-Za-z0-9_-]{11})/i', $v->url, $m)) $ytId = $m[1];
            elseif (preg_match('/embed\/([A-Za-z0-9_-]{11})/i', $v->url, $m)) $ytId = $m[1];
            elseif (preg_match('/shorts\/([A-Za-z0-9_-]{11})/i', $v->url, $m)) $ytId = $m[1];
            @endphp
            <div class="col-12 col-md-6 col-lg-4">
                @if($ytId)
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/{{ $ytId }}" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="mt-2 small text-center">{{ $v->name }}</div>
                @else
                <a class="btn btn-outline-primary w-100" href="{{ $v->url }}" target="_blank">{{ $v->name ?? $v->url }}</a>
                @endif
            </div>
            @endforeach
        </div>

    </div>
</div>

{{-- Modal Pop Up Gambar --}}
<div class="modal fade" id="fotoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="position-absolute top-0 end-0 p-2">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">X</button>
            </div>
            <img id="modalImage" src="" class="w-100 rounded shadow">
            <div class="bg-white text-center p-2 mt-2 rounded" id="modalTitle"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var fotoModal = document.getElementById('fotoModal');
        fotoModal.addEventListener('show.bs.modal', function(event) {
            var img = event.relatedTarget;
            fotoModal.querySelector('#modalImage').src = img.getAttribute('data-img');
            fotoModal.querySelector('#modalTitle').innerText = img.getAttribute('data-title');
        });
    });
</script>
@endsection