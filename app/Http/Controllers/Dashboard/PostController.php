<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find();

        // $post->delete(2);
        // $post->update(
        //     [
        //         'title' => 'este es un ubdate del ejemplo',

        //     ]
        // );

        // dd($post);
        // Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'content' => 'test content',
        //         'category_id' => 1,
        //         'descripcion' => 'test descripcion',
        //         'posted' => 'not',
        //         'image' => 'test image',
        //     ]
        // );
        return 'indexas';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
