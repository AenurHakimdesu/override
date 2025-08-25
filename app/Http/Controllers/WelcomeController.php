<?php

namespace App\Http\Controllers;

use App\Models\Web\Post;
use App\Models\Photo;
use App\Models\RunningText;
use App\Models\Tautan;
use App\Models\Video;
use App\Models\Album;
use App\Models\Agenda;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    private function getLatests($categoryId, $limit = 10)
    {
        return Post::where('category_id', $categoryId)
            ->orderByDesc('view') // urutkan dari yang paling banyak dilihat
            ->limit($limit)
            ->get();
    }

    // ====== WELCOME PAGE ======
    public function __invoke()
    {
        // Ambil Running Text
        $running_text = RunningText::latest()->take(5)->get();

        // Ambil 4 berita terbaru
        $berita = Post::category(1)->latest()->paginate(4);

        // Ambil 4 pengumuman terbaru
        $pengumuman = Post::category(2)->latest()->paginate(4);

        // Ambil produk terbaru
        $produk = Post::category(3)->latest()->get();

        // Ambil galeri
        $foto = Photo::with('albums')->latest()->take(4)->get();

        $video = Video::latest()->take(3)->get();

        return view('welcome', compact('pengumuman', 'berita', 'running_text', 'produk', 'foto', 'video'));
    }

    // ====== BERITA ======
    public function berita()
    {
        $posts = Post::category(1)->latest()->paginate(4);
        $latests = $this->getLatests(1);

        return view('welcome.berita.index', compact('posts', 'latests'));
    }

    public function beritaDetail($slug)
    {
        $berita = Post::where('category_id', 1)
            ->where('slug', $slug)
            ->firstOrFail();
        $berita->increment('view');

        $latests = $this->getLatests(1);


        return view('welcome.berita.show', compact('berita', 'latests'));
    }

    public function beritaSearch(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('category_id', 1)
            ->where('title', 'like', "%{$search}%")
            ->latest()
            ->paginate(4);

        $latests = $this->getLatests(1);


        return view('welcome.berita.index', compact('posts', 'latests'));
    }

    // ====== PENGUMUMAN ======
    public function pengumuman()
    {
        $posts = Post::where('category_id', 2)
            ->latest()
            ->paginate(4);

        $latests = $this->getLatests(2);

        return view('welcome.pengumuman.index', compact('posts', 'latests'));
    }

    public function pengumumanDetail($slug)
    {
        $pengumuman = Post::where('category_id', 2)
            ->where('slug', $slug)
            ->firstOrFail();
        $pengumuman->increment('view');

        $latests = $this->getLatests(2);


        return view('welcome.pengumuman.show', compact('pengumuman', 'latests'));
    }

    public function pengumumanSearch(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('category_id', 2)
            ->where('title', 'like', "%{$search}%")
            ->latest()
            ->paginate(4);

        $latests = $this->getLatests(2);

        return view('welcome.pengumuman.index', compact('posts', 'latests'));
    }

    // ====== PRODUK ======
    public function produk()
    {
        $posts = Post::where('category_id', 3)
            ->latest()
            ->paginate(5);

        $latests = $this->getLatests(3);

        return view('welcome.produk.index', compact('posts', 'latests'));
    }

    public function produkDetail($slug)
    {
        $produk = Post::where('category_id', 3)
            ->where('slug', $slug)
            ->firstOrFail();
        $produk->increment('view');

        $latests = $this->getLatests(3);


        return view('welcome.produk.show', compact('produk', 'latests'));
    }

    public function produkSearch(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('category_id', 3)
            ->where('title', 'like', "%{$search}%")
            ->latest()
            ->paginate(4);

        $latests = $this->getLatests(3);

        return view('welcome.produk.index', compact('posts', 'latests'));
    }

    // ====== GALERI ======
    public function galeri()
    {
        $albums = Album::with('photos')->get();
        $videos = Video::latest()->get();

        return view('welcome.galeri.index', compact('albums', 'videos'));
    }
}
