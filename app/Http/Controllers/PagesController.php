<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
    public function show($slug)
    {
        $data = Page::where('slug', $slug)->where('status', 'ACTIVE')->firstOrFail();
        return view('pages.index', compact('data'));
    }
}
