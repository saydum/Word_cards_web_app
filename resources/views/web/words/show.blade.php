@extends('web.layout')

@section('content')

    <h4>
        <a class="btn btn-outline-primary" href="{{ route('cards.show', $word->card->id) }}">Назад</a>
        Слово:
        <span class="text-muted">{{ $word->value }}</span>
    </h4>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">Слово</th>
            <th scope="col">Транскрипт</th>
            <th scope="col">Перевод</th>
            <th scope="col">Статус</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $word->value }}</td>
                <td>{{ $word->transcript }}</td>
                <td>{{ $word->translate }}</td>
                @if($word->status)
                    <td class="text-success">Изучен!</td>
                @else
                    <td class="text-danger">Не изучен!</td>
                @endif
            </tr>
        </tbody>
    </table>
    @if($example)
        <div class="py-4">
            <h5 class="text-muted">Примеры:</h5>
            <div class="alert alert-success" role="alert" style="font-size: 18px">
                {{ $example }}
            </div>
        </div>
    @else
        <div class="py-4">
            <h5 class="text-muted">Добавить пример:</h5>
            <form action="{{ route('example.store') }}" method="POST">
                @csrf
                <input type="text"
                       class="form-control"
                       aria-label="text"
                       name="text">
                <label>
                    <input type="text" hidden="hidden" name="word_id" value="{{ $word->id }}">
                </label>
                <br>
                <button type="submit" class="btn btn-success">Добавить</button>
            </form>
        </div>
    @endif
    <a class="btn btn-outline-success" href="{{ route('words.edit', $word->id) }}">Изменить</a>
    <form style="display: inline-block" action="{{ route('words.destroy', $word->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" onclick="alert('Подтвердите действие'); return true;">
            Удалить слово
        </button>
    </form>
@endsection
