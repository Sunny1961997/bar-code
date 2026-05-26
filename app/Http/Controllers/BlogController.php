<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blog.create', compact('categories'));
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
            $image->move(public_path('img/blog'), $imageName);
            $imagePath = 'img/blog/' . $imageName;
        }
    
        Blog::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'slug' => Str::slug($request->title),
            'publish' => $request->has('publish') ? 1 : 0,
        ]);
    
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        $imagePath = $blog->image; 
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $imageName);
            $imagePath = 'img/blog/' . $imageName;
        }
    
        $blog->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'slug' => Str::slug($request->title),
            'publish' => $request->has('publish') ? 1 : 0,
        ]);
    
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image && File::exists(public_path($blog->image))) {
            File::delete(public_path($blog->image));
        }
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
