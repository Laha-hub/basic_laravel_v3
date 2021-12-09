<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// 配列にて ['該当クラス名', '該当メソッド名'] の形式で指定する。
// Route::get('/', ['App\Http\Controllers\PostController', 'index']);

// 上記の書き換え版（::classで文字列として取得できる）
// Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

// useしておけば短縮化
Route::get('/', [PostController::class, 'index']);
