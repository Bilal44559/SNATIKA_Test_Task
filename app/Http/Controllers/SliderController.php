<?php

namespace App\Http\Controllers;

use App\Services\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliderService;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }

    public function index()
    {
        $sliders = $this->sliderService->getAllSliders();
        return view('pages.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('pages.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'link' => 'required|url|max:255',
            'button_text' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $this->sliderService->storeSlider($request->all());

        return redirect()->route('slider')->with('success', 'Slider saved successfully!');
    }

    public function edit($id)
    {
        $slider = $this->sliderService->getSliderById($id);
        return view('pages.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'link' => 'required|url|max:255',
            'button_text' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $this->sliderService->updateSlider($id, $request->all());

        return redirect()->route('slider')->with('success', 'Slider updated successfully!');
    }

    public function destroy($id)
    {
        $this->sliderService->deleteSlider($id);

        return redirect()->route('slider')->with('success', 'Slider deleted successfully!');
    }
}
