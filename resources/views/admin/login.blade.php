<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin sign in | Jac Olivol</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://jacolivol.com/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @endif
</head>
<body class="admin-page admin-login-page">
    <main class="login-shell">
        <a class="brand-logo login-brand-logo" href="https://jacolivol.com/">
            <img src="https://jacolivol.com/images/jack-olivol.webp" alt="Jac Olivol" onerror="this.style.display='none'">
        </a>
        <section class="login-card">
            <p class="eyebrow">Private workspace</p>
            <h1>Login</h1>
            <p class="muted">Sign in to view the latest contacts and careers</p>
            @if ($errors->any())
                <div class="alert">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('admin.login.submit') }}" class="login-form">
                @csrf
                <label for="email">Email address</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="username" required autofocus>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required>
                <button type="submit">Sign in</button>
            </form>
        </section>
        <p class="login-footer">jacolivol.com <span>•</span> Lead desk</p>
    </main>
</body>
</html>
