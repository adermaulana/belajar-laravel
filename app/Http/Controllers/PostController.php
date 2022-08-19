<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        return view('posts', [
            "title" => "Halaman Blog",
            // "postsy" => Post::all(),
            "postsy" => Post::latest()->get()
        ]);

    }

    public function show(Post $post) {

        return view('post', [
            "title" => "Single Post",
            "postman" => $post
        ]);

    }

    public function kematian() {
        return view('about', [
            "title" => "About",
            "name" => "Ade Rahmat Maulana",
            "email" => "adermaulana15@gmail.com",
            "image" => "ademaulana.jpg"
        ]);
    }

    public function category(Category $category) {

        return view('category', [
            "title" => $category->nama,
            "posts" => $category->posts,
            "category" => $category->nama
        ]);

    }

    public function categories(Category $category) {

        return view('categories', [
            "title" => 'Post Categories',
            "categories" => Category::all()

        ]);

    }

    public function authors(User $author) {

        return view('posts', [
            "title" => 'User Post',
            "postsy" => $author->posts,

        ]);

    }

}
