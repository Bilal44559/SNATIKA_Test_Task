<?php

namespace App\Repositories\Contracts;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function getAll();

    public function create(array $data): Category;

    public function update(Category $category, array $data): bool;

    public function delete(Category $category): bool;
}
