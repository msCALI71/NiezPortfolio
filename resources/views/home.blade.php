<!DOCTYPE html>
<html>
<head>
    <title>Home - Laravel Info</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Welcome to Laravel</h1>
    <p><strong>What is Laravel?</strong></p>
    <p>Laravel is a powerful PHP framework for web development, known for its elegant syntax, MVC architecture, and built-in tools for routing, authentication, and database management.</p>

    <h2>How to Set Up Laravel</h2>
    <ol>
        <li>Install Composer</li>
        <li>Run <code>composer create-project laravel/laravel projectName</code></li>
        <li>Navigate into your project directory</li>
        <li>Run <code>php artisan serve</code> to start your local development server</li>
    </ol>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/gallery">Gallery</a>
    </nav>
</body>
</html>
