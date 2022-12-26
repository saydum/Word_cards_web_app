@extends('web.layout')

@section('content')
<h3 style="padding-bottom: 15px">Изменить название карточки</h3>
<form action="{{ route('cards.update', $card->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <label>Название карточки</label>
            <input type="text" class="form-control" aria-label="name" name="name" value="{{ $card->name }}">
        </div>
    </div>
</form>
@endsection
