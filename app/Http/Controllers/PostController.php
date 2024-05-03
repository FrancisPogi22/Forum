<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;

    public function __construct()
    {
        $this->post = new Post;
    }

    public function index()
    {
        return view('posts.posts', ['posts' => $this->post::all()]);
    }

    public function store(Request $request)
    {
        $this->post->title = $request->title;
        $this->post->body = $request->body;
        $this->post->user_id = rand(1, 5);
        $this->post->save();

        return redirect('/');
    }

    public function show($id)
    {
        $post = $this->post::with('user')->where('id', $id)->firstorFail();

        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = $this->post::where('id', $id)->firstOrFail();

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = $this->post::where('id', $id)->firstOrFail();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $post = $this->post::where('id', $id)->firstOrFail();
        $post->delete();

        return redirect('/');
    }
}
