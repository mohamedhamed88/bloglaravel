<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if ($request->has('file')) {
            $url = time() . $request->file->getClientOriginalName();
            $path = "imagepost";
            $request->file->move($path, $url);
        }
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $url;
        $post->author_id = $request->author_id;
        $post->category_id = $request->category_id;

        $post->save();
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
