<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostsModel;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = new PostsModel;
        $post->users = 'aaaa';
        $post->date = 'aaaa';
        $post->title = 'aaaa';
        $post->content = 'aaaa';
        $post->save();
    }
}
