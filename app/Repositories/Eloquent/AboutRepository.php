<?php

namespace App\Repositories\Eloquent;

use App\Models\About;
use App\Repositories\Contracts\AboutRepositoryInterface;

class AboutRepository implements AboutRepositoryInterface
{
    public function getFirstOrCreate()
    {
        $about = About::first();
        if($about){
            return $about;
        }
        return About::firstOrCreate([
            'heading' => '',
            'sub_heading' => '',
            'description' => '',
        ]);
    }

    public function findById($id)
    {
        return About::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $about = $this->findById($id);
        return $about->update($data);
    }
}
