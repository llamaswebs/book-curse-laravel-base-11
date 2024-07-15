<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(2);

        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Post::create($request->validated());

        return to_route('post.index')->with('status', 'Post creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('dashboard.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');

        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();
        //imagen
        if (isset($data['image'])) {
            $data['image'] = $filename = time() . '.' . $data['image']->extension();
            $request->image->move(public_path('uploads/post'), $filename);
        }
        //imagen
        $post->update($data);

        return to_route('post.index')->with('status', 'Post  actualizada');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Eliminar el post
        $post->delete($post);

        // Redirigir o responder con un mensaje de éxito
        return to_route('post.index')->with('status', 'Post eliminada');
    }
}
