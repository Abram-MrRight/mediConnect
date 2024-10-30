<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'mediConnect')</title>

    <!-- Load Tailwind CSS and Material Icons -->
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">

        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            @include('partials.header')

            <!-- Main Content -->
            <main class="p-4 flex-1 overflow-auto">
                @yield('content') <!-- Section for main content -->
            </main>

            <!-- Footer -->
            @include('partials.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
