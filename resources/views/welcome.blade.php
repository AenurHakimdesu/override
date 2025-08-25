@extends('layout.mainlayout')

@push('styles')
<style type="text/css">
    .responsive {
        width: 100%;
        height: auto;
    }
</style>
@endpush

<!-- Tombol Survei Kepuasan Pengunjung -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
    .survei-btn {
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #137bd5ff;
        /* Biru */
        color: white;
        padding: 8px 14px;
        border-radius: 10px;
        /* Rounded */
        font-size: 14px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s, transform 0.2s;
        z-index: 9999;
        text-decoration: none;
    }

    .survei-btn:hover {
        background-color: #156ebcff;
        /* Biru lebih gelap saat hover */
        transform: scale(1.05);
        text-decoration: none;
        color: white;
    }

    .survei-btn i {
        font-size: 14px;
    }

    /* 5 kolom per baris pada ukuran md ke atas */
    @media (min-width: 768px) {
        .col-md-5per {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }
</style>

<a href="https://sepakat.tegalkab.go.id/form/responden/Nw==" class="survei-btn" title="Survei Kepuasan Pengunjung">
    <i class="fas fa-pen"></i> Survei Kepuasan Pengunjung
</a>
<!-- End Tombol Survei Kepuasan Pengunjung -->

@section('content')

<!-- Running Text -->
<section>
    <div class="running-text-container"
        style="width: 100%; overflow: hidden; background-color: white; color: black; padding: 10px 0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); position: relative; margin: 0 auto;">

        <p class="running-text"
            style="display: inline-block; white-space: nowrap; font-size: 12px; font-weight: bold; text-align: center; padding: 0 20px; animation: marquee 100s linear infinite; margin-bottom: 1px;">
            @foreach($running_text as $rt)
            <span style="margin-right: 100px;">{{ $rt->text }}</span>
            @endforeach
        </p>
    </div>
</section>
<!-- End Running Text -->

<!-- Carousel Section -->
<div id="welcomeCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000">

    <!-- Indicator Dots -->
    <div class="carousel-indicators">
        @foreach($pengumuman->take(3) as $index => $item)
        <button type="button"
            data-bs-target="#welcomeCarousel"
            data-bs-slide-to="{{ $index }}"
            class="{{ $index == 0 ? 'active' : '' }}"
            aria-current="{{ $index == 0 ? 'true' : 'false' }}">
        </button>
        @endforeach
    </div>

    <!-- Carousel Items -->
    <div class="carousel-inner">
        @foreach($pengumuman->take(3) as $index => $item)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ asset('storage/'.$item->image) }}"
                class="d-block w-100"
                alt="{{ $item->title }}"
                style="max-height:500px; object-fit:cover;">

            <div class="carousel-caption d-none d-md-block">
                <h5>
                    <a href="{{ route('pengumuman.show', $item->slug) }}"
                        class="text-white text-decoration-none">
                        {{ $item->title }}
                    </a>
                </h5>
                <p>{{ Str::limit($item->excerpt, 80) }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Arrow Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Carousel Section -->

<!-- Pengumuman Section -->
<section class="section section-pengumuman">
    <div class="container">
        <div class="section-header text-center">
            <h2>Pengumuman</h2>
            <p class="sub-title">Pengumuman terbaru dari BKPSDM Kabupaten Tegal</p>
        </div>
        <div class="row blog-grid-row">
            @foreach($pengumuman as $post)
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="/pengumuman/{{ $post->slug }}">
                            <img class="img-fluid" src="/storage/{{ str_replace('.jpg','-small.jpg', $post->image) }}" alt="Post Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul class="entry-meta meta-item">
                            <li>
                                <div class="post-author">
                                    <a href="#"><span>{{ $post->Author->name }}</span></a>
                                </div>
                            </li>
                            <li><i class="far fa-clock"></i> {{ $post->created_at->diffForHumans() }}</li>
                            <li><i class="fas fa-eye"></i> {{ $post->view }}</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="/pengumuman/{{ $post->slug }}">{{ $post->title }}</a>
                        </h3>
                        <p class="mb-0">{{ Str::limit($post->excerpt, 130) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="view-all text-center">
            <a href="/pengumuman" class="btn btn-primary">Pengumuman Lainnya</a>
        </div>
    </div>
</section>
<!-- End Pengumuman Section -->

<!-- Berita Section -->
<section class="section section-blogs">
    <div class="container">
        <div class="section-header text-center">
            <h2>Berita Kepegawaian</h2>
            <p class="sub-title">Berita Kepegawaian terbaru dari BKPSDM Kabupaten Tegal</p>
        </div>
        <div class="row blog-grid-row">
            @foreach($berita as $post)
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="/berita/{{ $post->slug }}">
                            <img class="img-fluid" src="/storage/{{ str_replace('.jpg','-small.jpg', $post->image) }}" alt="Post Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <ul class="entry-meta meta-item">
                            <li>
                                <div class="post-author">
                                    <a href="#"><span>{{ $post->Author->name }}</span></a>
                                </div>
                            </li>
                            <li><i class="far fa-clock"></i> {{ $post->created_at->diffForHumans() }}</li>
                            <li><i class="fas fa-eye"></i> {{ $post->view }}</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="/berita/{{ $post->slug }}">{{ $post->title }}</a>
                        </h3>
                        <p class="mb-0">{{ Str::limit($post->excerpt, 130) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="view-all text-center">
            <a href="/berita" class="btn btn-primary">Berita Lainnya</a>
        </div>
    </div>
</section>
<!-- End Berita Section -->

<!-- Produk BKPSDM Section -->
<section class="section section-products">
    <div class="container text-center">
        <div class="section-header text-center">
            <h2>Produk BKPSDM</h2>
            <p class="sub-title">Produk dari BKPSDM Kabupaten Tegal</p>
        </div>

        <div class="row justify-content-left">
            @foreach($produk as $p)
            <div class="col-6 col-sm-3 col-md-5per mb-4">
                <a href="{{ url('/produk/'.$p->slug) }}" class="product-item text-decoration-none">
                    <img src="{{ asset('storage/'.$p->image) }}" alt="{{ $p->title }}" class="img-fluid mb-2" style="max-height:80px;">
                    <p>{{ $p->title }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Produk BKPSDM Section -->

<!-- Section Galeri -->
<section class="py-5">
    <div class="container">
        <div class="container text-center">
            <div class="section-header text-center">
                <h2>Galeri</h2>
                <p class="sub-title">Galeri BKPSDM Kabupaten Tegal</p>
            </div>

            {{-- ===== FOTO (atas) ===== --}}
            <div class="row g-3 mb-5">
                @foreach($foto as $index => $f)
                @php
                // pastikan path URL pakai forward slash
                $path = isset($f->foto) ? $f->foto : (isset($f->path) ? $f->path : $f->image ?? '');
                $path = str_replace('\\','/',$path);
                @endphp
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="{{ asset('storage/'.$path) }}"
                        alt="{{ $f->name ?? 'Foto Galeri' }}"
                        class="img-fluid rounded shadow-sm w-100"
                        style="height:200px;object-fit:cover;cursor:pointer;"
                        data-bs-toggle="modal"
                        data-bs-target="#fotoModal"
                        data-img="{{ asset('storage/'.$path) }}"
                        data-title="{{ $f->albums->name}} ({{ $f->albums->lokasi}})">
                </div>
                @endforeach
            </div>

            {{-- helper kecil untuk ambil ID YouTube --}}
            @php
            $ytId = function(string $url) {
            $patterns = [
            '/youtu\.be\/([A-Za-z0-9_-]{11})/i',
            '/v=([A-Za-z0-9_-]{11})/i',
            '/embed\/([A-Za-z0-9_-]{11})/i',
            '/shorts\/([A-Za-z0-9_-]{11})/i',
            ];
            foreach ($patterns as $p) {
            if (preg_match($p, $url, $m)) return $m[1];
            }
            parse_str(parse_url($url, PHP_URL_QUERY) ?? '', $q);
            return $q['v'] ?? null;
            };
            @endphp

            {{-- ===== VIDEO (bawah) ===== --}}
            <div class="row g-3">
                @foreach($video as $v)
                @php $id = $ytId($v->url ?? ''); @endphp
                <div class="col-12 col-md-6 col-lg-4">
                    @if($id)
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.youtube.com/embed/{{ $id }}"
                            title="{{ $v->name ?? 'Video Galeri' }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="mt-2 small">{{ $v->name ?? '' }}</div>
                    @else
                    <a class="btn btn-outline-primary w-100" href="{{ $v->url }}" target="_blank" rel="noopener">
                        Tonton: {{ $v->name ?? $v->url }}
                    </a>
                    @endif
                </div>
                @endforeach
            </div>

            <div class="view-all text-center mt-4">
                <a href="/galeri" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- End Section Galeri -->

<!-- Modal untuk foto -->
<div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 text-center">
                <img id="modalImage" src="" alt="" class="img-fluid rounded shadow">
                <div class="bg-white text-center p-2 mt-2 rounded" id="modalTitle"></div>
            </div>
            <div class="position-absolute top-0 end-0 p-2">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">X</button>
            </div>
        </div>
    </div>
</div>

<script>
    //Script untuk modal foto
    // Saat klik foto, ubah isi modal
    document.addEventListener('DOMContentLoaded', function() {
        var fotoModal = document.getElementById('fotoModal');
        fotoModal.addEventListener('show.bs.modal', function(event) {
            var img = event.relatedTarget;
            var src = img.getAttribute('data-img');
            var title = img.getAttribute('data-title');
            fotoModal.querySelector('#modalImage').src = src;
            fotoModal.querySelector('#modalTitle').textContent = title;
        });
    });

    //Script Running Text
    // Menambahkan animasi marquee via JS untuk menghindari deteksi sistem
    const style = document.createElement('style');
    style.innerHTML = `
                    @keyframes marquee {
                        0% {
                            transform: translateX(33%);
                        }
                        100% {
                            transform: translateX(-100%);
                        }
                    }
                `;
    document.head.appendChild(style);

    //Script untuk reload data halaman saat kembali 
    document.addEventListener("DOMContentLoaded", function() {
        let navEntries = performance.getEntriesByType("navigation");
        if (navEntries.length > 0 && navEntries[0].type === "back_forward") {
            window.location.reload();
        }
    });
</script>

@endsection