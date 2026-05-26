<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/news'), $imageName);
            $imagePath = 'img/news/' . $imageName;
        }
    
        News::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'slug' => Str::slug($request->title),
            'publish' => $request->has('publish') ? 1 : 0,
        ]);
    
        return redirect()->route('news.index')->with('success', 'News created successfully!');
    }
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        $imagePath = $news->image; 
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/news'), $imageName);
            $imagePath = 'img/news/' . $imageName;
        }
    
        $news->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'slug' => Str::slug($request->title),
            'publish' => $request->has('publish') ? 1 : 0,
        ]);
    
        return redirect()->route('news.index')->with('success', 'News updated successfully!');
    }

    public function destroy(News $news)
    {
        if ($news->image && File::exists(public_path($news->image))) {
            File::delete(public_path($news->image));
        }
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
