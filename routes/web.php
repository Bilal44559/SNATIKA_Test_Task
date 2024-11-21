<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProgramController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/user-login', [AuthController::class, 'UserLogin'])->name('user-login');
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Count posts with 'status' = '1' (Active)
        $activePostsCount = Post::where('status', '1')->count();
        $inactivePostsCount = Post::where('status', '0')->count();
        $allPostsCount = Post::count();
        return view('pages.admin.home', [
            'activePostsCount' => $activePostsCount,
            'inactivePostsCount' => $inactivePostsCount,
            'allPostsCount' => $allPostsCount
        ]);
    })->name('dashboard');

    // Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // post
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    // Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/{post}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('/slider/{post}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/{post}', [SliderController::class, 'destroy'])->name('slider.destroy');

    // About
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');

    // Program
    Route::resource('programs', ProgramController::class);
});

