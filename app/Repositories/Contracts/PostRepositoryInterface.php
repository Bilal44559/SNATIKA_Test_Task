<?php

namespace App\Repositories\Contracts;

use App\Models\Post;

interface PostRepositoryInterface
{
    public function getAll();

    public function getById(int $id): Post;

    public function create(array $data): Post;

    public function update(Post $post, array $data): bool;

    public function delete(Post $post): bool;
}
