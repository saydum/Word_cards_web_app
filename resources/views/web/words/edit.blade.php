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

        <div class="row">
            <div class="col">
                <div class="form-check form-switch py-3" style="font-size: 18px">
                    <input
                        name="status"
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        {{ ($word->status) ? "checked" : "" }}
                        >
                    <label class="form-check-label">Изучен!</label>
                </div>
            </div>
        </div>

        <div class="row py-4">
            <div class="col mb-3">
                @foreach($word->examples as $example)
                <label for="exampleFormControlTextarea1" class="form-label">Примеры предложении с новым словом</label>
                <textarea style="font-size: 18px" name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $example->text }}
                </textarea>
                @endforeach

                <div class="py-3">
                    <button class="btn btn-primary">Изменить</button>
                </div>
            </div>
        </div>
    </form>
@endsection
