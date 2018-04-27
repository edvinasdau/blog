<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create($request->only('title', 'text') + ['author_id' => Auth::id()]);
        session() -> flash( 'success', 'Post created successfully' );

        return redirect()->route('posts.index');
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['postsSingle' => $post]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['postsEdit' => $post]);
    }


    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->except('_token'));

        return redirect()->route('posts.index', $id);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
