<?php

namespace App\Repositories\Contracts;

interface ProgramRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function findById($id);
    public function update($id, array $data);
    public function delete($id);
}
