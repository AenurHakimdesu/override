<?php $page = "blog-details"; ?>
@extends('layout.mainlayout')

@push('styles')
<style>
    .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }

    .active-archive,
    .collapsible:hover {
        background-color: #555;
    }

    .content-archive {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
    }
</style>
@endpush

@section('content')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Pengumuman</h2>
            </div>
        </div>
    </div>
</div>
<!-- content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row blog-grid-row">
                    @foreach($posts as $value)
                    <div class="col-md-6 col-sm-12">
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{ route('pengumuman.show', $value->slug) }}"><img class="img-fluid" src="/storage/{{ str_replace('.jpg','-medium.jpg', $value->image) }}" style="width:593px; height:369px;" alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <span>{{ $value->Author->name }}</span>
                                        </div>
                                    </li>
                                    <li><i class="far fa-clock"></i> {{ $value->created_at->diffForHumans() }}</li>
                                    <li><i class="far fa-eye"></i> {{ $value->view }}</li>
                                </ul>
                                <h3 class="blog-title">
                                    <a href="{{ route('pengumuman.show', $value->slug) }}">{{ $value->title }}</a>
                                </h3>
                                <p class="mb-0">{{ Str::limit($value->excerpt, 130) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-pagination">
                            <nav>
                                {{ $posts->links('layout.partials.paginate') }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

                <!-- Search -->
                <div class="card search-widget">
                    <div class="card-body">
                        <form class="search-form" action="{{ route('pengumuman.search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" id="search" name="search" placeholder="Search..." class="form-control" value="{{ old('search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Search -->

                <!-- Pengumuman Terpopuler -->
                <div class="card post-widget">
                    <div class="card-header">
                        <h4 class="card-title">Pengumuman Terpopuler</h4>
                    </div>
                    <div class="card-body">
                        <ul class="latest-posts">
                            @foreach ($latests as $latest)
                            <li>
                                <div class="post-thumb">
                                    <a href="{{ route('pengumuman.show', $latest->slug) }}">
                                        <img class="img-fluid" src="/storage/{{ str_replace('.jpg', '-small.jpg', $latest->image) }}">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                        <a href="{{ route('pengumuman.show', $latest->slug) }}">{{ $latest->title }}</a>
                                    </h4>
                                    <p>{{ $latest->created_at->format('d M Y') }}</p>
                                    <p>Dilihat {{ $latest->view }} Kali</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Pengumuman Terpopuler -->

            </div>
            <!-- End Sidebar -->

        </div>
    </div>
</div>
</div>
<!-- end content -->
<script>
    //Script untuk reload data halaman saat kembali 
    document.addEventListener("DOMContentLoaded", function() {
        let navEntries = performance.getEntriesByType("navigation");
        if (navEntries.length > 0 && navEntries[0].type === "back_forward") {
            window.location.reload();
        }
    });
</script>
@endsection