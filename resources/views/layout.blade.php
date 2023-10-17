<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Word cards Desktop application v2.1.0</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container p-8">

        <div class="flex">

            @include('sidebar')
            <div class="grow h-14">
                @yield('content')
            </div>

            <div class="flex-none w-14 h-14">
                <button class="btn btn-outline btn-success ml-4" onclick="my_modal_1.showModal()">Добавить</button>
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Выберите то что необходимо!</h3>
                        <p class="py-4 pt-4">
                            <a href="{{ route('cards.create') }}" class="btn btn-success">
                                Добавить карточку
                            </a>

                        <h3>Добавить слово</h3>

                        <div class="dropdown">
                            <label tabindex="0" class="btn m-1">Выбрать карточку</label>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                @foreach(\App\Models\Card::all() as $card)
                                @if(isset($card))
                                <li><a href="{{ route('cards.edit', $card->id) }}">{{ $card->name }}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>

                        </p>
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn">Close</button>
                            </form>
                        </div>
                    </div>
                </dialog>

            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
