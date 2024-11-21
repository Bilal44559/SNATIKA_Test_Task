<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->getAll();
    }

    public function getPostById(int $id)
    {
        return $this->postRepository->getById($id);
    }

    public function createPost(array $data)
    {
        if (isset($data['image']) && $data['image']->isValid()) {
            $data['image'] = $data['image']->store('images', 'public');
        }

        return $this->postRepository->create($data);
    }

    public function updatePost(Post $post, array $data)
    {
        if (isset($data['image']) && $data['image']->isValid()) {
            if ($post->image && Storage::exists('public/' . $post->image)) {
                Storage::delete('public/' . $post->image);
            }

            $data['image'] = $data['image']->store('images', 'public');
        }

        return $this->postRepository->update($post, $data);
    }

    public function deletePost(Post $post)
    {
        if ($post->image && Storage::exists('public/' . $post->image)) {
            Storage::delete('public/' . $post->image);
        }

        return $this->postRepository->delete($post);
    }
}
