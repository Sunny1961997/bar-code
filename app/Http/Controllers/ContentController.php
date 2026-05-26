<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::get();
        return view('admin.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new content.
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created content.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'content' => 'nullable|string',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/content'), $imageName);
            $imagePath = 'img/content/' . $imageName;
        }

        Content::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return redirect()->route('contents.index')->with('success', 'Content created successfully.');
    }

    /**
     * Show the form for editing the content.
     */
    public function edit(Content $content)
    {
        return view('admin.content.edit', compact('content'));
    }

    /**
     * Update the specified content.
     */
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'content' => 'nullable|string',
        ]);

        $imagePath = $content->image; 
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/content'), $imageName);
            $imagePath = 'img/content/' . $imageName;
        }

        $content->update([
            'name' => $request->name,
            'content' => $request->content,
            'slug' => $request->slug,
            'image' => $imagePath,
        ]);

        return redirect()->route('contents.index')->with('success', 'Content updated successfully.');
    }

    /**
     * Remove the specified content.
     */
    public function destroy(Content $content)
    {
        Storage::disk('public')->delete($content->image);
        $content->delete();

        return redirect()->route('contents.index')->with('success', 'Content deleted successfully.');
    }
}
