<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $categories = Categorie::withCount('blogs')->get();
  
    $latestBlogs = Blog::orderBy('id', 'desc')->take(2)->get();;

    $pageBlogs = Blog::with('user', 'category')->latest()->paginate(4);

    $sliderBlogs = Blog::with('user', 'category')->latest()->take(4)->get();

    return view('index', compact('latestBlogs', 'pageBlogs', 'sliderBlogs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.addblog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
