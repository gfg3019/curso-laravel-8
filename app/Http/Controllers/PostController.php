<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StoreUpdatePost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        //dd($posts);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        //$post = Post::where('id', $id)->first();
        //dd($post);
        if(!$post = Post::find($id))
        {
            return redirect()->route('posts.index');
        }
        return view('admin.post.show', compact('post'));
    }

    public function destroy($id){
        //dd("Deletando o post {$id}");
        if(!$post = Post::find($id))
        {
            return redirect()->route('posts.index');
        }
        $post->delete();
        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Deletado com sucesso');

    }
}
