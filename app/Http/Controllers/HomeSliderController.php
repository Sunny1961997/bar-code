<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class HomeSliderController extends Controller
{
    public function index()
    {
        $homeSliders = HomeSlider::all();
        return view('admin.home_slider.index', compact('homeSliders'));
    }

    public function create()
    {
        return view('admin.home_slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'url' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);

        // Handle the image upload
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->move(public_path('img'), $filename);

        // Create a new HomeSlider record
        HomeSlider::create([
            'image' => 'img/' . $filename,
            'url' => $request->input('url'),
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
        ]);

        return redirect()->route('home-sliders.index')
                         ->with('success', 'HomeSlider created successfully.');
    }

    public function show(HomeSlider $homeSlider)
    {
        //
    }

    public function edit(HomeSlider $homeSlider)
    {
        return view('admin.home_slider.edit', compact('homeSlider'));
    }

    public function update(Request $request, HomeSlider $homeSlider)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'url' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path($homeSlider->image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            // Handle the new image upload
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->move(public_path('img'), $filename);
            $homeSlider->image = 'img/' . $filename;
        }

        // Update other fields
        $homeSlider->url = $request->input('url');
        $homeSlider->title = $request->input('title');
        $homeSlider->subtitle = $request->input('subtitle');
        $homeSlider->save();

        return redirect()->route('home-sliders.index')
                         ->with('success', 'HomeSlider updated successfully.');
    }

    public function destroy(HomeSlider $homeSlider)
    {
        // Delete the image file if it exists
        $imagePath = public_path($homeSlider->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Delete the record
        $homeSlider->delete();

        return redirect()->route('home-sliders.index')
                         ->with('success', 'HomeSlider deleted successfully.');
    }
}
