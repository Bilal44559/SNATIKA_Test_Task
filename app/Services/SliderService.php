<?php

namespace App\Services;

use App\Repositories\Contracts\SliderRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class SliderService
{
    protected $sliderRepository;

    public function __construct(SliderRepositoryInterface $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    public function getAllSliders()
    {
        return $this->sliderRepository->getAll();
    }

    public function getSliderById($id)
    {
        return $this->sliderRepository->find($id);
    }

    public function storeSlider(array $data)
    {
        if (isset($data['image']) && $data['image']->isValid()) {
            $data['image'] = $data['image']->store('sliders', 'public');
        }
        return $this->sliderRepository->create($data);
    }

    public function updateSlider($id, array $data)
    {
        $slider = $this->sliderRepository->find($id);

        if (isset($data['image']) && $data['image']->isValid()) {
            if ($slider->image && Storage::exists('public/' . $slider->image)) {
                Storage::delete('public/' . $slider->image);
            }
            $data['image'] = $data['image']->store('sliders', 'public');
        }

        return $this->sliderRepository->update($id, $data);
    }

    public function deleteSlider($id)
    {
        $slider = $this->sliderRepository->find($id);

        if ($slider->image && Storage::exists('public/' . $slider->image)) {
            Storage::delete('public/' . $slider->image);
        }

        return $this->sliderRepository->delete($id);
    }
}
