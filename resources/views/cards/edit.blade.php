@extends('layout')

@section('content')
<div class="pl-5">
    <h3 style="padding-bottom: 15px">Добавить новое слово</h3>
    <form action="{{ route('words.store')}}" method="POST">
        @csrf

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Новое слово</span>
            </label>
            <input type="text" placeholder="Новое слово" name="value" class="input input-bordered input-success w-full max-w-xs" />
        </div>

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Транскрипт</span>
            </label>
            <input type="text" placeholder="Транскрипт" name="transcript" class="input input-bordered input-success w-full max-w-xs" />
        </div>

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Перевод</span>
            </label>
            <input type="text" placeholder="Перевод" name="translate" class="input input-bordered input-success w-full max-w-xs" />
        </div>

        {{-- @TODO исправь передачи id из формы--}}
            <input type="text" hidden="hidden" name="card_id" value="{{ $cardId }}">

        <div class="flex flex-col pt-4">
            <div class="form-control">
                <label class="cursor-pointer label">

                    <textarea class="textarea textarea-success" name="text" rows="4" cols="56"></textarea>
                </label>
            </div>
        </div>

        <button class="btn btn-outline mt-4">Добавить</button>

    </form>
</div>
@endsection
