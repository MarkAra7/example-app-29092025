<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Post::create(['title' => 'Tests 1', 'content' => 'Saturs 1']);
        Post::create(['title' => 'Tests 2', 'content' => 'Saturs 2']);
        Post::create(['title' => 'Tests 3', 'content' => 'Saturs 3']);
    }
}
