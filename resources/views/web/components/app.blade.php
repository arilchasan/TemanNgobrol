<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TemanNgobrol</title>
</head>
<body>

    {{-- Header --}}
    @include('web.components.header')

    {{-- Konten Halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('web.components.footer')

</body>
</html>
