<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return Post::all();
    }

    public function getById(int $id): Post
    {
        return Post::with('category')->findOrFail($id);
    }

    public function create(array $data): Post
    {
        return Post::create($data);
    }

    public function update(Post $post, array $data): bool
    {
        return $post->update($data);
    }

    public function delete(Post $post): bool
    {
        return $post->delete();
    }
}
