<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];

    public function index()
    {
        // showメソッドでも$postsを扱えるよう、privateプロパティに変更
        // $posts = [
        //     'Title A',
        //     'Title B',
        //     'Title C',
        // ];

        return view('index')
            ->with(['posts' => $this->posts]);
    }

    public function show($id)
    {
        return view('show')
            ->with(['post' => $this->posts[$id]]);
    }
}
