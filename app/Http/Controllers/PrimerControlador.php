<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = ['post1', 'postasdfsadf2'];
        // $data = ['name' => 'salvador', 'edad' => 23];
        return view('contact', compact('posts'));
    }

    public  function otro($post)
    {

        echo $post;
    }
}
