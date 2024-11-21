<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Post;
use App\Models\Program;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::with('category')->where('status', '1')->orderBy('created_at', 'DESC')->get();
        $sliders = Slider::all();
        $about = About::first();
        $programs = Program::all();
        return view('pages.home.index', compact('posts','sliders', 'about', 'programs'));
    }
}
