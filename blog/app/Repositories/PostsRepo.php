<?php


namespace App\Repositories;

use App\Models\PostsModel;
use Carbon\Carbon;

class PostsRepo
{
    public function getAllPosts()
    {
        return PostsModel::all();
    }

    public function addPostRepo($posts)
    {
        $date = Carbon::now()->day . '/' . Carbon::now()->month . '/' . Carbon::now()->year;
        $user = 'adsad';
        $post = new PostsModel();
        $post->fill($posts);
        $post->date = $date;
        $post->users = $user;
        $post->save();
    }
}
