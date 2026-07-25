@extends('admin.layouts.header')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid px-4 py-4">
    <div class="mb-4"><h1 class="h2 mb-1">Content Dashboard</h1><p class="mb-0">Manage the public website content and supporting records.</p></div>
    <div class="row g-4">
        @foreach ([
            ['blogs.index','fa-pen-to-square','Articles','Create and maintain practical AML guidance.'],
            ['news.index','fa-newspaper','News','Publish compliance and company updates.'],
            ['contents.index','fa-file-lines','Page Content','Update database-managed mission and vision content.'],
            ['home-sliders.index','fa-images','Home Slides','Manage homepage hero title, subtitle, image, and link.'],
            ['categories.index','fa-tags','Categories','Organise article and news content.'],
            ['products.index','fa-box','Products & Codes','Manage product records and generate codes.'],
        ] as [$route,$icon,$title,$copy])
            <div class="col-md-6 col-xl-4"><article class="card h-100"><div class="card-body p-4"><i class="fas {{ $icon }} fa-2x mb-3 text-primary" aria-hidden="true"></i><h2 class="h5">{{ $title }}</h2><p>{{ $copy }}</p><a class="btn btn-outline-primary stretched-link" href="{{ route($route) }}">Manage {{ $title }}</a></div></article></div>
        @endforeach
    </div>
</div>
@endsection
