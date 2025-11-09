<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
         $categories = Categorie::all();
    return view('pages.blogs.addblog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //
        $path = $request->file('image')->store('blogs', 'public');

        Blog::create([
        'name' => $request->name,
        'description' => $request->description,
        'image' => $path,
        'category_id' => $request->category_id,
        'user_id' => Auth::id(),

    ]);

    return redirect()->route('blogs.create')->with('success', 'Blog added successfully!');
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
        $categories = Categorie::all();
    return view('pages.blogs.editblog', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
            if ($blog->user_id !== Auth::id()) {
            abort(403);
            }
        $data = $request->only(['name', 'description']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blogs', 'public');
            $data['image'] = $path;
        }

        
        $blog->update($data);

        return redirect()->route('profile.edit')->with('success', 'Blog updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
{
    $blog->delete();
    return redirect()->route('profile.edit')->with('success', 'Blog deleted successfully!');
}

}
