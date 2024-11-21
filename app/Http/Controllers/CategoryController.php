<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $this->categoryService->createCategory($request->only(['name', 'status']));

        return redirect()->route('categories')->with('success', 'Category created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $this->categoryService->updateCategory($category, $request->only(['name', 'status']));

        return redirect()->route('categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->categoryService->deleteCategory($category);

        return redirect()->route('categories')->with('success', 'Category deleted successfully');
    }
}
