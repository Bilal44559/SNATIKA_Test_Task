<?php

namespace App\Repositories\Contracts;

interface AboutRepositoryInterface
{
    public function getFirstOrCreate();
    public function findById($id);
    public function update($id, array $data);
}
