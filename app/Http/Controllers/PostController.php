<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPosts();
        return view('pages.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.posts.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $this->postService->createPost($request->all());

        return redirect()->route('posts')->with('success', 'Post created successfully.');
    }

    public function edit($id)
    {
        $post = $this->postService->getPostById($id);
        $categories = Category::all();

        return view('pages.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:0,1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $this->postService->updatePost($post, $request->all());

        return redirect()->route('posts')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $this->postService->deletePost($post);

        return redirect()->route('posts')->with('success', 'Post deleted successfully.');
    }
}
