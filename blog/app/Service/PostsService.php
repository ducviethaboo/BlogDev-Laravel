<?php


namespace App\Service;


use App\Repositories\PostsRepo;

class PostsService
{
    protected $postsService;

    public function __construct(PostsRepo $postsRepo)
    {
        $this->postsService = $postsRepo;
    }

    public function getAllPostService()
    {
        $posts = $this->postsService->getAllPosts();
        return view('user.home', compact('posts'));
    }

    public function addPost($post)
    {
        $this->postsService->addPostRepo($post);
    }
}
