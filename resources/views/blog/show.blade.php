@include('layouts.header')
@php($image = $blog->image && file_exists(public_path($blog->image)) ? asset($blog->image) : asset('img/aml-insights-editorial.webp'))
<article>
<header class="page-hero"><div class="container"><a href="{{ route('blog') }}" class="page-kicker text-decoration-none">Articles / {{ $blog->category->name ?? 'AML Guidance' }}</a><h1>{{ $blog->title }}</h1><p><time datetime="{{ $blog->created_at->toDateString() }}">Published {{ $blog->created_at->format('F j, Y') }}</time></p></div></header>
<div class="content-section"><div class="container"><div class="article-shell"><img src="{{ $image }}" alt="" class="w-100 rounded-4 mb-5" width="1100" height="620" fetchpriority="high"><div class="rich-content">{!! $blog->description !!}</div><hr class="my-5"><a href="{{ route('blog') }}" class="btn button-secondary"><i class="bi bi-arrow-left me-2" aria-hidden="true"></i>Back to Articles</a></div></div></div>
</article>
<section class="content-section pt-0"><div class="container"><div class="cta-band d-lg-flex align-items-center justify-content-between gap-4"><div><h2>Apply this guidance to your business.</h2><p class="mb-lg-0">Discuss your specific risks and obligations with our compliance team.</p></div><a href="{{ route('contact') }}" class="btn btn-light rounded-pill px-4 py-3">Book a Consultation</a></div></div></section>
@include('layouts.footer')
