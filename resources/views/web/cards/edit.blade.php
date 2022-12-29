@extends('web.layout')

@section('content')
<h3 style="padding-bottom: 15px">Изменить название карточки</h3>
<form action="{{ route('cards.update', $card->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <label>Название карточки</label>
            <input type="text" class="form-control" aria-label="name" name="name" value="{{ $card->name }}">
        </div>
    </div>
    <input hidden="hidden" type="text" value="{{ $card->user_id }}" name="user_id">
</form>
@endsection
