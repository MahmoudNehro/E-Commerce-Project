<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Blog\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }


    public function create()
    {
        return view('blogs.create');
    }

    public function store(BlogRequest $request)
    {
        $user = auth()->user();
        $validated = $request->validated();
        $user->blogs()->create($validated);
        return redirect(route('blogs.index'));
    }


    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $validated = $request->validated();
        $blog->update($validated);
        return redirect(route('blogs.index'));
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect(route('blogs.index'));
    }
}
