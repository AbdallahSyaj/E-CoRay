<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
   
    public function index()
    {
        $categories = Categorie::withCount('blogs')->get();

        $pageBlogs = Blog::with('user', 'category')->latest()->paginate(6);

        $latestBlogs = Blog::orderBy('id', 'desc')->take(2)->get();

        return view('pages.categories', compact('categories', 'pageBlogs', 'latestBlogs'));
    }

    
    public function show($id ,Request $request)
    {
        $category = Categorie::findOrFail($id);

        $blogs = Blog::with('user')->where('category_id', $id)->latest()->paginate(6);

        $categories = Categorie::withCount('blogs')->get();
        $latestBlogs = Blog::orderBy('id', 'desc')->take(2)->get();

        return view('pages.categories', compact('category', 'blogs', 'categories', 'latestBlogs'));
    }
}
