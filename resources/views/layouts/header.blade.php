<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1d1655">
    <meta name="description" content="Practical AML, CFT, and goAML compliance support for UAE-regulated businesses.">
    <title>@yield('title', 'The GoAML Compliance Service') | Compliance Without Compromise</title>

    <link rel="icon" href="{{ asset('img/go-aml.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}?v=1.2" rel="stylesheet">
    <link href="{{ asset('css/modern.css') }}?v=1.2" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to main content</a>

    <div class="site-contact-rail" aria-label="Quick contact options">
        <x-company-contact field="primary_phone" :icon-only="true" aria-label="Call The GoAML Compliance Service">
            <i class="bi bi-telephone" aria-hidden="true"></i>
        </x-company-contact>
        <x-company-contact field="primary_email" :icon-only="true" aria-label="Email The GoAML Compliance Service">
            <i class="bi bi-envelope" aria-hidden="true"></i>
        </x-company-contact>
        <x-company-contact field="whatsapp" :external="true" :icon-only="true">
            <i class="bi bi-whatsapp" aria-hidden="true"></i>
        </x-company-contact>
    </div>

    <header class="site-header">
        <div class="site-utility d-none d-lg-block">
            <div class="container d-flex align-items-center justify-content-between gap-4">
                <p class="mb-0"><i class="bi bi-clock me-2" aria-hidden="true"></i><x-company-contact field="hours" /></p>
                <div class="d-flex align-items-center gap-4">
                    <x-company-contact field="primary_phone"><i class="bi bi-telephone me-2" aria-hidden="true"></i></x-company-contact>
                    <x-company-contact field="primary_email"><i class="bi bi-envelope me-2" aria-hidden="true"></i></x-company-contact>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg site-navbar" aria-label="Primary navigation">
            <div class="container">
                <a class="navbar-brand" href="{{ route('/') }}" aria-label="The GoAML Compliance Service home">
                    <img src="{{ asset('img/go-aml3.png') }}" alt="The GoAML Compliance Service" width="95" height="64">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation" aria-controls="primaryNavigation" aria-expanded="false" aria-label="Open navigation menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="primaryNavigation">
                    <div class="navbar-nav ms-auto align-items-lg-center">
                        <a href="{{ route('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('compliance-solutions') }}" class="nav-link {{ request()->is('compliance-solutions') ? 'active' : '' }}">Compliance Solutions</a>
                        <a href="{{ route('about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('sustainability') }}" class="nav-link {{ request()->is('sustainability') ? 'active' : '' }}">Responsible Business</a>
                        <div class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle {{ request()->is('insights*') ? 'active' : '' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Insights
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('insights') }}" class="dropdown-item">Insights Overview</a></li>
                                <li><a href="{{ route('blog') }}" class="dropdown-item">Articles</a></li>
                                <li><a href="{{ route('news') }}" class="dropdown-item">News</a></li>
                            </ul>
                        </div>
                        <a href="{{ route('contact') }}" class="btn site-header-cta ms-lg-3">Book a Consultation</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main id="main-content">
