<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index() {
        $posts=post::all();
        return view('post.index',compact('posts'));
    }
    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
            ]);
            
        // CHAPTER7で追加
        $validated['user_id'] = auth()->id();

        $post = Post::create($validated);
        return back();
    }
}
