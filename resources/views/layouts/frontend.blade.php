<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Tracker</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900">

    {{-- ✅ Navbar --}}
    @include('components.navbar')

    {{-- ✅ Hero Section --}}
    @include('components.hero')

    {{-- ✅ Features Section --}}
    @include('components.features')

    {{-- ✅ Pricing Section --}}
    @include('components.pricing')

    {{-- ✅ Testimonials --}}
    @include('components.testimonials')

    {{-- ✅ FAQs --}}
    @include('components.faqs')

    {{-- ✅ Footer --}}
    @include('components.footer')

    @vite('resources/js/app.js')
</body>
</html>
