<?php

namespace App\Services;

use App\Models\Post;
use App\Repository\PostRepository;
use Illuminate\Database\Eloquent\Collection;

class PostService{
    public function __construct(private PostRepository $postRepository){}
    public function getAllPost(): Collection
    {
        return $this->postRepository->all();
    }
    public function createPost(array $data): Post
    {
        return $this->postRepository->create($data);
    }
}
