<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Secure Access | The GoAML Compliance Service</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="auth-body">
    <a class="visually-hidden-focusable position-absolute top-0 start-0 m-3 p-2 bg-dark text-white" href="#auth-content">Skip to main content</a>
    <header class="auth-header"><div class="container d-flex align-items-center justify-content-between py-3"><a href="{{ route('/') }}" class="auth-brand"><img src="{{ asset('img/go-aml3.png') }}" alt="The GoAML Compliance Service" width="150" height="58"></a><a href="{{ route('/') }}" class="btn btn-outline-secondary rounded-pill">Back to Website</a></div></header>
    <main id="auth-content" class="auth-main py-5">@yield('content')</main>
</body>
</html>
