<?php

namespace App\Repositories\Eloquent;

use App\Models\Slider;
use App\Repositories\Contracts\SliderRepositoryInterface;

class SliderRepository implements SliderRepositoryInterface
{
    public function getAll()
    {
        return Slider::all();
    }

    public function find($id)
    {
        return Slider::findOrFail($id);
    }

    public function create(array $data)
    {
        return Slider::create($data);
    }

    public function update($id, array $data)
    {
        $slider = $this->find($id);
        $slider->update($data);
        return $slider;
    }

    public function delete($id)
    {
        $slider = $this->find($id);
        $slider->delete();
        return $slider;
    }
}
