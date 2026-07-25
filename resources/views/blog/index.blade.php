@include('layouts.header')
<section class="page-hero"><div class="container"><span class="page-kicker">Articles & Guides</span><h1>Practical AML guidance for regulated teams.</h1><p>Explore clear perspectives on risk-based controls, due diligence, reporting, and day-to-day compliance operations.</p></div></section>
<section class="content-section"><div class="container">
@if($blogs->isNotEmpty())
<div class="row g-4">@foreach($blogs as $blog) @php($image = $blog->image && file_exists(public_path($blog->image)) ? asset($blog->image) : asset('img/aml-insights-editorial.webp'))
<div class="col-md-6 col-lg-4"><article class="modern-card p-0 overflow-hidden"><img src="{{ $image }}" class="w-100 article-card__image" alt="" width="720" height="420" loading="lazy"><div class="p-4"><p class="page-kicker mb-2">{{ $blog->category->name ?? 'AML Guidance' }}</p><h2 class="h4"><a class="stretched-link text-decoration-none text-dark" href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h2><p class="small text-muted"><time datetime="{{ $blog->created_at->toDateString() }}">{{ $blog->created_at->format('F j, Y') }}</time></p><p>{{ Str::limit(strip_tags($blog->description), 135) }}</p></div></article></div>
@endforeach</div><div class="d-flex justify-content-center mt-5">{{ $blogs->links() }}</div>
@else <div class="modern-card text-center py-5"><span class="modern-card__icon"><i class="bi bi-journal" aria-hidden="true"></i></span><h2 class="h4">New articles are on the way.</h2><p class="mb-0">Contact our team if you need guidance on a current compliance question.</p></div> @endif
</div></section>
@include('layouts.footer')
