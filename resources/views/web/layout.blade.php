<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Самое простое приложение для сохранения и изучения новых слов.</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<div id="app">

    @include('web._embed.header')

        @guest
            <main class="py-4">
                <section class="py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        @endguest

        @auth
            <main class="py-4">
                <section class="py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                @include("web._embed.sidebar")
                            </div>
                            <div class="col-md-10">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        @endauth

    @include('web._embed.footer')
</div>
</body>
</html>

