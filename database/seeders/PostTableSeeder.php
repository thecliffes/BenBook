<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Post;
        $a->title = 'Best pizza of 2022';
        $a->content = 'pepperoni obviously';
        $a->user_id = 1;
        $a->save();
    }
}
