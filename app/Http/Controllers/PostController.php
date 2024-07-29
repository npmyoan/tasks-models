<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::where('title', 'Laravel')->get();

        return view('posts.list', compact('posts'));
    }
}
