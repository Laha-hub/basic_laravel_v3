<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];

    //index.blade.phpにて、$postsの内容を'posts'という変数名で受け取れる。
    return view('index')
        ->with(['posts' => $posts]);
});
