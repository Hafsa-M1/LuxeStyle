<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern E-commerce Website">
    <meta name="author" content="Your Brand Name">
    <title>@yield("title", "E-Commerce Platform")</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"> <!-- Optional Custom CSS -->
    @yield("style")
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <!-- Main Content -->
    <main class="flex-grow-1">
        @yield("content")
    </main>

    <!-- Footer (Optional) -->
    <footer class="py-3 bg-dark text-center text-white">
        <p class="mb-0">&copy; {{ date('Y') }} Your Brand. All Rights Reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script> <!-- Optional Custom JS -->
    @yield("script")
</body>
</html>

















