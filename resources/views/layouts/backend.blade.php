<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Tracker - Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- ✅ Sidebar (fixed left side) --}}
    @include('layouts.sidebar')

    {{-- ✅ Navbar (fixed top) --}}
    @include('layouts.navbar')

   <main class="pt-20 ml-64 px-12 pb-12">
    @yield('content')
</main>



    @vite('resources/js/app.js')
</body>
</html>
