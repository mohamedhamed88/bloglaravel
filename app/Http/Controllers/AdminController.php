<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.index', compact('posts', 'categories', 'authors'));
    }
    public function addArticle(Request $request)
    {

        Post::create($request->all());
        return back();
    }
    public function categories()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function addCategory(Request $request)
    {
        Category::create([
            'name' => $request->category,
        ]);
        return back();
    }

    public function authors()
    {
        $authors = Author::all();
        return view('admin.author', compact('authors'));
    }
    public function addAuthor(Request $request)
    {
        Author::create($request->all());
        return back();
    }
}
