@extends('layout')

@section('content')
<div class="pl-5">
    <h3 style="padding-bottom: 15px">Добавить название карточки</h3>
    <form action="{{ route('cards.store') }}" method="POST">
        @csrf

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Название карточки</span>
            </label>
            <input type="text" placeholder="Английский язык" name="name" class="input input-bordered input-success w-full max-w-xs" />
        </div>

        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Цель</span>
            </label>
            <input type="number" placeholder="500" name="finish" class="input input-bordered input-success w-full max-w-xs" />
        </div>

        <div class="mt-4">
            <button class="btn btn-outline mt-4">Добавить</button>
        </div>
    </form>
</div>
@endsection
