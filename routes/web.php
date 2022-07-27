<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;

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
    $data['posts'] = Post::all();
    return view('welcome',$data);
});
Route::get('/post/{post:slug}',function (Post $post){

    $data['post'] = $post;
    return view('post',$data);
});
Route::get('/categories/{category}',function (Category $category){

    $data['posts'] = $category->posts;
    return view('welcome',$data);
});
