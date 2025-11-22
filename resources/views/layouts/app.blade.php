<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Conference System</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Conference System</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item me-3">
                <button class="btn btn-outline-secondary" disabled>Logout</button>
            </li>
            <li class="nav-item">
                <span class="navbar-text">
                    Dmitrij Testuser
                </span>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
