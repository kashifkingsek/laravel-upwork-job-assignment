<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Image;
use Faker\Factory as faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=100; $i++){
        $faker = faker::create();
        $post = new Post;
        $post->author = $faker->name;
        $post->title = $faker->title;
        $post->body = $faker->text;
        $post->cover = '1639916435_givetra-logo.png';
        $post->save();
        }

        for($i = 1; $i<=100; $i++){
        $faker = faker::create();
        $image = new Image;
        $image->post_id = $faker->name;
        $image->image = 'logo.png';

        }

    }
}
