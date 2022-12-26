@extends('web.layout')

@section('content')
    <h3 style="padding-bottom: 15px">Изменить слово {{ $word->value }}</h3>
    <form action="{{ route('words.update', $word->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label>Новое слово</label>
                <input type="text" class="form-control" placeholder="Слово"
                       aria-label="value" name="value" value="{{ $word->value }}">
            </div>
            <div class="col">
                <label>Транскрипт <code>Не обязательно</code></label>
                <input type="text" class="form-control" placeholder="Транскрипция"
                       aria-label="transcript" name="transcript" value="{{ $word->transcript }}">
            </div>
            <div class="col">
                <label>Перевод</label>
                <input type="text" class="form-control" placeholder="Перевод"
                       aria-label="translate" name="translate" value="{{ $word->translate }}">
            </div>
        </div>

        <div class="row py-4">
            <div class="col mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Примеры предложении с новым словом</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">
                    {{ $word->text }}
                </textarea>
                <div class="py-4">
                    <button class="btn btn-success">Добавить</button>
                </div>
            </div>
        </div>
    </form>
@endsection
