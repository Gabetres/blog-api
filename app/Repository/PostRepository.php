<?php

namespace App\Repository;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    public function all(): Collection
    {
        return Post::all();
    }
    public function find(int $id):Post
    {
        return Post::findOrFail($id);
    }
    public function create(array $data):Post
    {
        return Post::create($data);
    }
    public function update(int $id, array $data):Post
    {
        $post = $this->find($id);
        $post->update($data);
        return $post;
    }
    public function delete(int $id): bool
    {
        $post = $this->find($id);
        return $post->delete();
    }
}
