<?php

namespace App\Services;

use App\Repository\PostRepository;

class PostService{
    public function __construct(private PostRepository $postRepository){}

    public function getAllPost()
    {
        return $this->postRepository->all();
    }
    
}
