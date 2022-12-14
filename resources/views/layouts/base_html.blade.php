<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('modal.modal')


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- BOOSTRAP 5 --}}
    {{-- <link rel="stylesheet" href="{{ asset('lib/bootstrap5/css/bootstrap.min.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    {{-- DATATABLES --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    @routes

    <script src="{{ asset('lib/chart.js') }}"></script>

    {{-- directiva para las rutas de ziggy --}}
    {{-- @routes --}}
    {{-- swal alert libreria --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script> -->

    {{-- ESTILOS PROPIOS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- google captcha --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    {{-- NavBar de Inicio --}}
    <nav>
        {{-- @yield('navbar') --}}

    </nav>
    {{-- Contenido pantalla principal --}}
    <main>
        @yield('content')
    </main>
    {{-- Footer --}}
    <footer>
        {{-- @yield('footer') --}}
    </footer>
</body>
@stack('scripts')
{{-- BOOSTRAP 5 JS --}}
<script src="{{ asset('lib/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

{{-- JQUERY --}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

{{-- DATATABLES JS --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
@stack('scripts')

{{-- FONTAWESOME --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
    integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
