<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">

    @include('web.embed.header')



    @auth()
        <main class="py-4">
            <section class="py-5">
                <div class="container">
                    <div class="row">
                    @include('web.embed.sidebar')
                        <div class="col-md-10 justify-content-center">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @else
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endauth

    @include('web.embed.footer')
</div>
</body>
</html>

