<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // \App\Models\User::factory(10)->create();
        User::create([
            'name'=> 'Samsun',
            'username'=>'samsunmrf',
            'email' => 'samsun@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(5)->create();
        Category::create([
            'name'=> 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name'=> 'Horror',
            'slug' => 'horror',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'experpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.',
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.
        //     Fugit, aliquam dolore velit sint quis veniam sapiente ducimus facilis repudiandae adipisci consequatur libero, optio molestias? Corporis asperiores officia aperiam, recusandae eius optio dolore officiis quis aliquam vitae! Repudiandae, repellendus!
        //     Tempora velit voluptatum ea similique inventore iure nulla deleniti magnam, quia error unde quidem provident et, expedita labore esse optio id commodi vel. Assumenda aut, consequuntur officiis voluptatum harum possimus!
        //     Modi porro, pariatur quasi iusto nulla molestiae sequi illum excepturi quos! Nemo natus libero modi aliquid unde reiciendis itaque quo. Optio eum praesentium dolores odio sunt dignissimos exercitationem quibusdam modi."
        // ]);

        // Post::create([
        //     'title'=> 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'experpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.',
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.
        //     Fugit, aliquam dolore velit sint quis veniam sapiente ducimus facilis repudiandae adipisci consequatur libero, optio molestias? Corporis asperiores officia aperiam, recusandae eius optio dolore officiis quis aliquam vitae! Repudiandae, repellendus!
        //     Tempora velit voluptatum ea similique inventore iure nulla deleniti magnam, quia error unde quidem provident et, expedita labore esse optio id commodi vel. Assumenda aut, consequuntur officiis voluptatum harum possimus!
        //     Modi porro, pariatur quasi iusto nulla molestiae sequi illum excepturi quos! Nemo natus libero modi aliquid unde reiciendis itaque quo. Optio eum praesentium dolores odio sunt dignissimos exercitationem quibusdam modi."
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'experpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.',
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos et quasi exercitationem quam delectus maiores optio totam suscipit veritatis quis, hic a illo mollitia, laborum officia ipsa sequi doloribus? Eaque.
        //     Fugit, aliquam dolore velit sint quis veniam sapiente ducimus facilis repudiandae adipisci consequatur libero, optio molestias? Corporis asperiores officia aperiam, recusandae eius optio dolore officiis quis aliquam vitae! Repudiandae, repellendus!
        //     Tempora velit voluptatum ea similique inventore iure nulla deleniti magnam, quia error unde quidem provident et, expedita labore esse optio id commodi vel. Assumenda aut, consequuntur officiis voluptatum harum possimus!
        //     Modi porro, pariatur quasi iusto nulla molestiae sequi illum excepturi quos! Nemo natus libero modi aliquid unde reiciendis itaque quo. Optio eum praesentium dolores odio sunt dignissimos exercitationem quibusdam modi."
        // ]);

    }
}
