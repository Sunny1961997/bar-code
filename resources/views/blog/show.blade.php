

@include('layouts.header')

<!-- Hero Section -->
{{-- <section class="position-relative text-white d-flex align-items-center justify-content-center" style="height: 100vh; overflow: hidden;">
    <div class="hero-bg position-absolute top-0 start-0 w-100 h-100" 
        style="background:
        url('{{asset('img/worker.jpeg')}}') no-repeat center center; 
        background-size: cover; 
        background-position: center;
        z-index: -1;">
    </div>
    <div class="w-100 text-center px-3">
        <h1 class="text-white fw-bold mb-4">Welcome to GoAML Consultants</h1>
        <p class="lead fw-bold">Your trusted partner in business consulting.</p>
    </div>
</section> --}}

<!-- Blog Section -->
<div class="container py-5">
    <div class="container mt-5">
        <img src="{{ asset($blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
        <h1 class="mb-3">{{ $blog->title }}</h1>
        <p class="text-muted">Category: {{ $blog->category->name ?? 'Uncategorized' }}</p>
        <p class="text-muted">Published on: {{ $blog->created_at->format('F d, Y') }}</p>

        <div class="mt-4">
            {!! $blog->description !!}
        </div>

        <a href="{{ route('blog') }}" class="btn btn-primary mt-3">Back to Blogs</a>
    </div>
</div>

@include('layouts.footer')

