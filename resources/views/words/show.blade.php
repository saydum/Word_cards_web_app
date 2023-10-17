@extends('layout')

@section('content')

<h4>
    <a class="m-3 btn btn-outline-primary" href="{{ route('cards.show', $word->card->id) }}">Назад</a>
    Слово:
    <span class="text-muted">{{ $word->value }}</span>
</h4>
<table class="table table-hover table-bordered table-sm ml-3">
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
<div class="p-5">
    <div class="alert alert-success" role="alert" style="font-size: 18px">
        {{ $example }}
    </div>
</div>
@else
<div class="pl-5">
    <h5 class="text-muted">Добавить пример:</h5>
    <form action="{{ route('example.store') }}" method="POST">
        @csrf
        <input type="text" class="form-control" aria-label="text" name="text">
        <label>
            <input type="text" hidden="hidden" name="word_id" value="{{ $word->id }}">
        </label>
        <br>
        <button type="submit" class="btn btn-success">Добавить</button>
    </form>
</div>
@endif
<div class="pl-5">
    <a class="btn btn-outline btn-success mr-2" href="{{ route('words.edit', $word->id) }}">Изменить</a>
    <form style="display: inline-block" action="{{ route('words.destroy', $word->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="alert('Подтвердите действие'); return true;" class="btn btn-outline btn-error">
            Удалить
        </button>
    </form>
</div>
@endsection
