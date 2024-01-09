<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    public function all()
    {
        return Post::with('tags')->get();
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'id' => '',
            'author_id' => '',
            'title' => '',
            'content' => ''
        ]);
        Post::create($data);
    }

    public function handle(): View
    {
        return view('post.post', ['posts' => Post::all()]);
    }

    public function edit(Post $post, $id)
    {
        return view('post.post', ['posts' => Post::all(), 'selected_post' => Post::find($id)]);
    }

    public function update(Request $request, Post $selected_post): RedirectResponse
    {
        $data = $request->validate([
            'title' => '',
            'content' => '',
        ]);
        $selected_post->update($data);
        return back();
    }

    public function find($id)
    {
        return Post::findOrFail($id);
    }

}
