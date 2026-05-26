@include('layouts.header')


<!-- Blog Section -->
<div class="container py-5">
    <div class="row">
        @foreach($news as $new)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow border-0">
                    <img src="{{ asset($new->image) }}" class="card-img-top" alt="{{ $new->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new->title }}</h5>
                        <p class="text-muted"><small>Published on {{ \Carbon\Carbon::parse($new->created_at)->format('F d, Y') }}</small></p>
                        <p class="card-text">{{ Str::limit($new->content, 100) }}</p>
                        <a href="{{ route('insights.news.show', $new->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($news->isEmpty())
        <p class="text-center text-muted">No news available at the moment.</p>
    @endif

    <div class="d-flex justify-content-center mt-4">
        {{ $news->links() }} <!-- Pagination Links -->
    </div>
</div>

@include('layouts.footer')
