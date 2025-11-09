<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $validated = $request->validate([
            'search' => 'required|string|max:255',
        ]);
        $search = $request->input('search');

        $blogs = Blog::whereFullText(['name', 'description'], $search)->paginate(10);

        $categories = Categorie::withCount('blogs')->get();

        $pageBlogs = Blog::with('user', 'category')->latest()->paginate(6);

        $latestBlogs = Blog::orderBy('id', 'desc')->take(2)->get();


    return view('pages.blogs.search', compact('blogs', 'search', 'categories', 'pageBlogs', 'latestBlogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
