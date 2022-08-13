<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
    
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ade Rahmat Maulana",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odio tempora repellat necessitatibus cupiditate itaque placeat libero vero soluta nemo odit fugit doloribus eum impedit, doloremque, sequi at dolorem. Corporis tempora magnam obcaecati, tempore repudiandae maiores facere necessitatibus quis esse consectetur iste quae, ipsum eveniet tenetur! Dolore, ipsum dolorem. Amet dicta doloremque eaque incidunt itaque quod praesentium expedita corporis reiciendis maiores distinctio unde, saepe, non ad ab! Nostrum suscipit est nihil rem cumque et fuga sint placeat consequuntur sed in illo doloribus ad laudantium corporis, voluptate officia deserunt odit fugit voluptatibus distinctio exercitationem? Rerum consectetur officia repellendus alias rem similique."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dandi Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odio tempora repellat necessitatibus cupiditate itaque placeat libero vero soluta nemo odit fugit doloribus eum impedit, doloremque, sequi at dolorem. Corporis tempora magnam obcaecati, tempore repudiandae maiores facere necessitatibus quis esse consectetur iste quae, ipsum eveniet tenetur! Dolore, ipsum dolorem. Amet dicta doloremque eaque incidunt itaque quod praesentium expedita corporis reiciendis maiores distinctio unde, saepe, non ad ab! Nostrum suscipit est nihil rem cumque et fuga sint placeat consequuntur sed in illo doloribus ad laudantium corporis, voluptate officia deserunt odit fugit voluptatibus distinctio exercitationem? Rerum consectetur officia repellendus alias rem similique 30."
            ],

            [
                "title" => "Judul Post Ketiga",
                "slug" => "judul-post-ketiga",
                "author" => "Martin Garrix",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi odio tempora repellat necessitatibus cupiditate itaque placeat libero vero soluta nemo odit fugit doloribus eum impedit, doloremque, sequi at dolorem. Corporis tempora magnam obcaecati, tempore repudiandae maiores facere necessitatibus quis esse consectetur iste quae, ipsum eveniet tenetur! Dolore, ipsum dolorem. Amet dicta doloremque eaque incidunt itaque quod praesentium expedita corporis reiciendis maiores distinctio unde, saepe, non ad ab! Nostrum suscipit est nihil rem cumque et fuga sint placeat consequuntur sed in illo doloribus ad laudantium corporis, voluptate officia deserunt odit fugit voluptatibus distinctio exercitationem? Rerum consectetur officia repellendus alias rem similique 30."
                ],
    
    ];

    public static function all(){

        return collect(self::$blog_posts);

    }

    public static function find($slug){

        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }


    
}
