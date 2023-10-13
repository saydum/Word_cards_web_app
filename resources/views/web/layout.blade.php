<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Самое простое приложение для сохранения и изучения новых слов.</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
</head>
<body>
<div id="app">

    @include('web._embed.header')

    <main class="py-4">
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-md-2">
                        <h4 class="text-muted">Карточки</h4>
                        <nav class="navbar bg-white card mt-3">
                            <ul class="list-group">
                                @foreach(\App\Models\Card::all() as $card)
                                    @if(isset($card))
                                        <tr>
                                            <td>
                                                <a class="nav-link" aria-current="page" href="{{ route('cards.show', $card->id) }}">
                                                    {{ $card->name }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>

