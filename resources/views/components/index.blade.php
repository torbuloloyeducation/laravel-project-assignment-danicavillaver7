<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ url('/') }}" class="font-bold text-xl">My Laravel App</a>
            <div class="space-x-2">
                <a href="{{ url('/') }}" class="px-3 py-1 hover:text-gray-200">Home</a>
                <a href="{{ url('/about') }}" class="px-3 py-1 hover:text-gray-200">About</a>
                <a href="{{ url('/jobs') }}" class="px-3 py-1 hover:text-gray-200">Jobs</a>
                <a href="{{ url('/contact') }}" class="px-3 py-1 hover:text-gray-200">Contact</a>
                <a href="{{ url('/dashboard') }}" class="px-3 py-1 hover:text-gray-200">Dashboard</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} My Laravel App. All rights reserved.
        </div>
    </footer>

</body>
</html>