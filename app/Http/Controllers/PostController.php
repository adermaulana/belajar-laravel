<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        return view('posts', [
            "title" => "Blog",
            "postsy" => Post::all()
        ]);

    }

    public function show($slug) {

        return view('post', [
            "title" => "Single Post",
            "postman" => Post::find($slug)
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

}
