<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">

    @include('web.embed.header')

    <main class="py-4">

        <section class="py-5">
            <div class="container">
                <div class="row">
                    @auth()
                    @include('web.embed.sidebar')
                    @endauth
                    <!-- Content -->
                    <div class="col-md-10 justify-content-center">
                        @yield('content')
                    </div>

                </div>
            </div>
        </section>

    </main>

    @include('web.embed.footer')
</div>
</body>
</html>

