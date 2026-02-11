<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     */
    public function index(): View
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }
}
