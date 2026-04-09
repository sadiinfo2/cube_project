<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'কিউব লিমিটেড' }}</title>
    <meta name="description" content="কিউব লিমিটেড - আধুনিক সফটওয়্যার, ওয়েবসাইট, মেসেজিং ও ডিজিটাল সলিউশন।">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>