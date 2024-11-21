<?php

namespace App\Http\Controllers;

use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $aboutService;

    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index()
    {
        $about = $this->aboutService->getAbout();
        return view('pages.about.index', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'sub_heading' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $this->aboutService->updateAbout($request->id, $request->only(['heading', 'sub_heading', 'description']));

        return redirect()->route('about')->with('success', 'About details updated successfully.');
    }
}
