<?php
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {
    public function run()
    {
        // Post::truncate();
        $faker = Faker::create();
        for($i=1; $i<=25; $i++)
        {
            $post = new Post();
            $post->title = $faker->catchPhrase;
            $post->body  = $faker->realText;
            $post->user_id = User::all()->random(1)->id;
            $post->img_path = $faker->imageUrl($width = 640, $height = 480); // 'http://lorempixel.com/640/480/'
            $post->save();
        }
    }
}