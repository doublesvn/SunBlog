<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    //use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" =>"judul-post-pertama",
            "author" => "sandika Galih",
            "bacaan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.
            Fugit, aliquam dolore velit sint quis veniam sapiente ducimus facilis repudiandae adipisci consequatur libero, optio molestias? Corporis asperiores officia aperiam, recusandae eius optio dolore officiis quis aliquam vitae! Repudiandae, repellendus!
            Tempora velit voluptatum ea similique inventore iure nulla deleniti magnam, quia error unde quidem provident et, expedita labore esse optio id commodi vel. Assumenda aut, consequuntur officiis voluptatum harum possimus!
            Modi porro, pariatur quasi iusto nulla molestiae sequi illum excepturi quos! Nemo natus libero modi aliquid unde reiciendis itaque quo. Optio eum praesentium dolores odio sunt dignissimos exercitationem quibusdam modi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" =>"judul-post-kedua",
            "author" => "samsun dong",
            "bacaan" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.
            Fugit, aliquam dolore velit sint quis veniam sapiente ducimus facilis repudiandae adipisci consequatur libero, optio molestias? Corporis asperiores officia aperiam, recusandae eius optio dolore officiis quis aliquam vitae! Repudiandae, repellendus!
            Tempora velit voluptatum ea similique inventore iure nulla deleniti magnam, quia error unde quidem provident et, expedita labore esse optio id commodi vel. Assumenda aut, consequuntur officiis voluptatum harum possimus!
            Modi porro, pariatur quasi iusto nulla molestiae sequi illum excepturi quos! Nemo natus libero modi aliquid unde reiciendis itaque quo. Optio eum praesentium dolores odio sunt dignissimos exercitationem quibusdam modi."
            ],
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p['slug']===$slug){
        //         $post =$p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
        
    }
}

