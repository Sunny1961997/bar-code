@include('layouts.header')
<section class="page-hero"><div class="container"><span class="page-kicker">News & Updates</span><h1>Keep pace with the compliance landscape.</h1><p>Follow important AML/CFT developments, regulatory reminders, and updates relevant to UAE-regulated businesses.</p></div></section>
<section class="content-section"><div class="container">
@if($news->isNotEmpty())
<div class="row g-4">@foreach($news as $new) @php($image = $new->image && file_exists(public_path($new->image)) ? asset($new->image) : asset('img/aml-insights-editorial.webp'))
<div class="col-md-6 col-lg-4"><article class="modern-card p-0 overflow-hidden"><img src="{{ $image }}" class="w-100 article-card__image" alt="" width="720" height="420" loading="lazy"><div class="p-4"><p class="page-kicker mb-2">{{ $new->category->name ?? 'Compliance Update' }}</p><h2 class="h4"><a class="stretched-link text-decoration-none text-dark" href="{{ route('insights.news.show', $new->slug) }}">{{ $new->title }}</a></h2><p class="small text-muted"><time datetime="{{ $new->created_at->toDateString() }}">{{ $new->created_at->format('F j, Y') }}</time></p><p>{{ Str::limit(strip_tags($new->description), 135) }}</p></div></article></div>
@endforeach</div><div class="d-flex justify-content-center mt-5">{{ $news->links() }}</div>
@else <div class="modern-card text-center py-5"><span class="modern-card__icon"><i class="bi bi-megaphone" aria-hidden="true"></i></span><h2 class="h4">No news has been published yet.</h2><p class="mb-0">Check back for future compliance updates.</p></div> @endif
</div></section>
@include('layouts.footer')
