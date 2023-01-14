@extends('web.layout')

@section('content')
<h3 style="padding-bottom: 15px">Добавить новое слово</h3>
<form action="{{ route('words.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <label>Новое слово</label>
            <input type="text" class="form-control" placeholder="Слово" aria-label="value" name="value">
        </div>
        <div class="col">
            <label>Транскрипт <code>Не обязательно</code></label>
            <input type="text" class="form-control" placeholder="Транскрипция" aria-label="transcript" name="transcript">
        </div>
        <div class="col">
            <label>Перевод <code>Не обязательно</code></label>
            <input type="text" class="form-control" placeholder="Перевод" aria-label="translate" name="translate">
        </div>
    </div>
    <div class="row py-4">
        <div class="col mb-3">
            <div class="py-4">
                <button class="btn btn-success">Добавить</button>
            </div>
        </div>
    </div>
</form>
@endsection
