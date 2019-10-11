<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Post::create([
            "imagem" => "https://cdn130.picsart.com/266955198033202.jpg?r1024x1024",
            "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime atque molestiae, exercitationem consequuntur dolorem et consequatur soluta cum, dolores culpa laboriosam velit vero molestias natus repellat recusandae, saepe perspiciatis.",
            "tags" => "exemploTag",
            "user_id" => 1
        ]);

        Post::create([
            "imagem" => "https://mymodernmet.com/wp/wp-content/uploads/archive/LNu-UAyGfRK2WbD-Deh8_1082104833.jpeg",
            "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime atque molestiae, exercitationem consequuntur dolorem et consequatur soluta cum, dolores culpa laboriosam velit vero molestias natus repellat recusandae, saepe perspiciatis.",
            "tags" => "exemploTag",
            "user_id" => 2
        ]);

        Post::create([
            "imagem" => "https://66.media.tumblr.com/08a0821d4c4c0e6579cc34ea153265e0/tumblr_pz3qnaWQOI1vlb8rjo1_1280.jpg",
            "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime atque molestiae, exercitationem consequuntur dolorem et consequatur soluta cum, dolores culpa laboriosam velit vero molestias natus repellat recusandae, saepe perspiciatis.",
            "tags" => "exemploTag",
            "user_id" => 3
        ]);

        Post::create([
            "imagem" => "https://66.media.tumblr.com/c89985c8f724ee57ab1c19a4c480a44e/tumblr_punzy173EL1v40bczo1_640.jpg",
            "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime atque molestiae, exercitationem consequuntur dolorem et consequatur soluta cum, dolores culpa laboriosam velit vero molestias natus repellat recusandae, saepe perspiciatis.",
            "tags" => "exemploTag",
            "user_id" => 2
        ]);

        Post::create([
            "imagem" => "https://66.media.tumblr.com/64d7b8ab1c65584a518f57e34439941c/tumblr_pz32dox2Lf1ve9c86o1_500.jpg",
            "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime atque molestiae, exercitationem consequuntur dolorem et consequatur soluta cum, dolores culpa laboriosam velit vero molestias natus repellat recusandae, saepe perspiciatis.",
            "tags" => "exemploTag",
            "user_id" => 3
        ]);

        //factory(Post::class, 3)->create();
    }
}
