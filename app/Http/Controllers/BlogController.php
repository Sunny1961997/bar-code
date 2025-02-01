<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::get();
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'public' => 'required'
        ]);

        // Handle the image upload
        $blog = new Blog();
        $blog->description = $request->input('description');
        $blog->title = $request->input('title');
        $blog->category_id = $request->input('category_id');
        $blog->slug = $request->input('slug');
        $blog->publish = $request->input('publish');

        // Handle the image upload if it exists
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move(public_path('img'), $filename);
            $blog->image = 'img/' . $filename; // Store only the relative path
        }

        // Update the blog
        $blog->save();

        // Redirect with success message
        return redirect()->route('blogss.index')->with('success', 'Blog uploaded successfully.');
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
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->short_description = $request->input('short_description');
        $blog->name = $request->input('name');

        // Handle the image upload if it exists
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move(public_path('img'), $filename);
            $blog->image = 'img/' . $filename; // Store only the relative path
        }

        // Update the blog
        $blog->save();

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the image file if it exists
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        // Delete the blog
        $blog->delete();

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Blog deleted successfully.');
    }
}
