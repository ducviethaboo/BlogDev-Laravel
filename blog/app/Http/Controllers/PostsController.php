<?php

namespace App\Http\Controllers;

use App\Service\PostsService;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    protected  $postController;

    public function __construct(PostsService  $postsService)
    {
        $this->postController = $postsService;
    }

    public function getAllPost()
    {
        return $this->postController->getAllPostService();
    }

    public function showPostPage()
    {
        return view('user.new-post');
    }

    public function addPost(Request $request)
    {
        $posts = $request->all();
        $this->postController->addPost($posts);
    }
}
