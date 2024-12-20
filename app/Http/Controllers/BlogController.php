<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }
}