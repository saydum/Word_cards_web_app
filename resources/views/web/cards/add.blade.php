@extends('web.layout')

@section('content')
    <h3 style="padding-bottom: 15px">Добавить название карточки</h3>
    <form action="{{ route('cards.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label>Название карточки</label>
                <input type="text" class="form-control" placeholder="Английский язык" aria-label="name" name="name">
            </div>
        </div>
        <input hidden="hidden" type="text" name="user_id">
        <div class="py-4">
            <button class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
