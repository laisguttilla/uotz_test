<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'imagem'=>'https://source.unsplash.com/random/1080x1350',
        'descricao' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, in. Neque quasi fugit, libero unde ea dolores placeat rerum totam, et non illo omnis suscipit. Consequatur nisi explicabo nesciunt qui.',
        'tags' => 'exemploTag',
        'user_id' => 1
    ];
});
