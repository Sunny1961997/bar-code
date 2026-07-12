<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') | GoAML Compliance</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-modern.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed admin-shell">
    <a class="admin-skip-link" href="#admin-content">Skip to main content</a>
    <nav class="sb-topnav navbar navbar-expand navbar-dark admin-topbar" aria-label="Admin toolbar">
        <a class="navbar-brand ps-3" href="{{ route('home') }}">GoAML Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" type="button" aria-label="Toggle admin sidebar"><i class="fas fa-bars" aria-hidden="true"></i></button>
        <a class="btn btn-sm btn-outline-light ms-auto me-3" href="{{ route('/') }}" target="_blank" rel="noopener">View Website</a>
        <div class="dropdown me-3">
            <button class="btn btn-link text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle me-2" aria-hidden="true"></i>{{ Auth::user()->name }}</button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><span class="dropdown-item-text small text-muted">{{ Auth::user()->email }}</span></li>
                <li><hr class="dropdown-divider"></li>
                <li><button class="dropdown-item" type="submit" form="logout-form">Log Out</button></li>
            </ul>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion admin-sidebar" id="sidenavAccordion" aria-label="Admin navigation">
                <div class="sb-sidenav-menu"><div class="nav">
                    <div class="sb-sidenav-menu-heading">Manage</div>
                    @foreach ([
                        ['home','home','fa-gauge-high','Dashboard'],
                        ['categories.index','categories.*','fa-tags','Categories'],
                        ['products.index','products.*','fa-box','Products & Codes'],
                        ['blogs.index','blogs.*','fa-pen-to-square','Articles'],
                        ['news.index','news.*','fa-newspaper','News'],
                        ['contents.index','contents.*','fa-file-lines','Page Content'],
                        ['home-sliders.index','home-sliders.*','fa-images','Home Slides'],
                    ] as [$route,$match,$icon,$label])
                        <a class="nav-link {{ request()->routeIs($match) ? 'active' : '' }}" href="{{ route($route) }}"><span class="sb-nav-link-icon"><i class="fas {{ $icon }}" aria-hidden="true"></i></span>{{ $label }}</a>
                    @endforeach
                </div></div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main id="admin-content">@yield('content')</main>
            <footer class="admin-footer"><div class="container-fluid px-4">&copy; {{ date('Y') }} The GoAML Compliance Service FZE</div></footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @stack('scripts')
</body>
</html>
