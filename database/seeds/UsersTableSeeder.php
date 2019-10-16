<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "name" => "Abirosvaldo Silva",
            "username" => "abira",
            "email" => "abirosvaldo@gmail.com",
            'email_verified_at' => now(), 
            "imagem" => "https://images.radiox.co.uk/images/74331?crop=16_9&width=660&relax=1&signature=jCWxRq0QI5u0lrIrv4PT-qXkqGo=",
            "password" => bcrypt("123456"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            "name" => "Charles Bukowski",
            "username" => "chinaski",
            "email" => "chinaski@gmail.com",
            "email_verified_at" => now(),
            "imagem" => "https://media.newyorker.com/photos/5b733488b19e072f2f0e90d1/master/w_1023,c_limit/050314_ra551.jpg",
            "password" => bcrypt("velhosafado"),
            "remember_token" => Str::random(10)
        ]);

        User::create([
            "name" => "Ágata Smith",
            "username" => "a.smith",
            "email" => "asmith@gmail.com",
            "email_verified_at" => now(),
            "imagem" => "https://66.media.tumblr.com/8cc70bcbb8df10f1cfeea5fde1847699/tumblr_p12ias7QKk1wx0p07o1_400.jpg",
            "password" => bcrypt("123456"),
            "remember_token" => Str::random(10)
        ]);


        //factory(User::class, 3)->create();
    }
}
