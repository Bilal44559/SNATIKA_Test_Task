<?php

namespace App\Services;

use App\Repositories\Contracts\AboutRepositoryInterface;

class AboutService
{
    protected $aboutRepository;

    public function __construct(AboutRepositoryInterface $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    public function getAbout()
    {
        return $this->aboutRepository->getFirstOrCreate();
    }

    public function updateAbout($id, array $data)
    {
        return $this->aboutRepository->update($id, $data);
    }
}
