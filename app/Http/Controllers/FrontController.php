<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Content;
use App\Models\News;

use App\Mail\ContactMail;
use App\Mail\ConsultationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function blogPage()
    {
        $blogs = Blog::with('category')->orderBy('created_at', 'desc')->paginate(6);
        return view('blog.index', compact('blogs'));
    }
    public function individualBlog($slug)
    {
        $blog = Blog::with('category')->where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }

    public function newsPage()
    {
        $news = News::with('category')->orderBy('created_at', 'desc')->paginate(6);
        return view('news.index', compact('news'));
    }
    public function individualNews($slug)
    {
        $news = News::with('category')->where('slug', $slug)->firstOrFail();
        return view('news.show', compact('news'));
    }
    public function about()
    {
        $mission = Content::where('slug', 'mission')->first();
        $vision = Content::where('slug', 'vision')->first();
        return view('about', compact('mission', 'vision'));
    }
    public function sendQuote(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        // Store form data
        $data = $request->all();

        try {
            // Send email
            Mail::send(new ContactMail($data));
            return response()->json(['success' => 'Quote request sent successfully!']);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Email sending failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to send email. Please try again later.'], 500);
        }
    }
    public function sendConsultation(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string',
                'service' => 'required|string',
                'message' => 'required|string',
            ]);

            // Store form data
            $data = $request->all();

            // Send email
            Mail::send(new ConsultationMail($data));
            
            return response()->json(['success' => 'Consultation request sent successfully!']);
            
        } catch (\Exception $e) {
            Log::error('Consultation email failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to send request. Please try again later.'], 500);
        }
    }
}
