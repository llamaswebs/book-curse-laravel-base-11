<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundoControlador extends Controller
{
    public function index()
    {
        $data = ['name' => 'salvador', 'edad' => 23];
        return view('contact2', $data);
    }


}
