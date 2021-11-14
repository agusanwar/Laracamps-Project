<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- Styles --}}
    @include('components.styles')
    <title>laracamp | Agus Anwar</title>
</head>

<body>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- content --}}
    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    {{-- Script --}}
    @include('components.script')

</body>

</html>