<?php

namespace App\Http\Controllers;

use App\Services\ProgramService;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    protected $programService;

    public function __construct(ProgramService $programService)
    {
        $this->programService = $programService;
    }

    /**
     * Display a listing of the programs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $programs = $this->programService->getAllPrograms();
        return view('pages.programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new program.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.programs.add');
    }

    /**
     * Store a newly created program.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('icon')) {
            $imagePath = $request->file('icon')->store('images', 'public');
            $validated['icon'] = $imagePath;
        }

        $this->programService->createProgram($validated);
        return redirect()->route('programs.index')->with('success', 'Program created successfully!');
    }

    /**
     * Show the form for editing the specified program.
     *
     * @param \App\Models\Program $program
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $program = $this->programService->findById($id);
        return view('pages.programs.edit', compact('program'));
    }

    /**
     * Update the specified program.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Program $program
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('icon')) {
            if ($program->icon) {
                Storage::delete('public/' . $program->icon);
            }
            $validated['icon'] = $request->file('icon')->store('program_icons', 'public');
        }

        $this->programService->updateProgram($id, $validated);
        return redirect()->route('programs.index')->with('success', 'Program updated successfully!');
    }

    /**
     * Remove the specified program.
     *
     * @param \App\Models\Program $program
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->programService->deleteProgram($id);
        return redirect()->route('programs.index')->with('success', 'Program deleted successfully!');
    }
}
