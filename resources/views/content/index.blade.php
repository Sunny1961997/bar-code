@include('layouts.header')


<!-- Blog Section -->
<div class="container py-5">
    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow border-0">
                    <img src="{{ asset($blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="text-muted"><small>Published on {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</small></p>
                        <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($blogs->isEmpty())
        <p class="text-center text-muted">No blogs available at the moment.</p>
    @endif

    <div class="d-flex justify-content-center mt-4">
        {{ $blogs->links() }} <!-- Pagination Links -->
    </div>
</div>

@include('layouts.footer')
