@extends('web.layout')

@section('content')
    <div class="py-3">
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
    </div>

    <a href="{{ route('cards.edit', $cardId) }}" class="btn btn-primary float-end" style="margin-bottom: 10px">Добавить</a>
    <p>
        | Кол-во слов: <b>{{ $countWords }}</b> |
        <span class="text-success"> Изучено: <b>2</b></span> |
        <span class="text-danger"> Не изучено: <b>1</b></span> |
    </p>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Слово</th>
            <th scope="col">Транскрипт</th>
            <th scope="col">Перевод</th>
            <th scope="col">Статус</th>
            <th scope="col">Примеры</th>
        </tr>
        </thead>
        <tbody>
            @foreach($words as $word)
                <tr>
                    <th scope="row">{{ $counter++ }}</th>
                    <td>{{ $word->value }}</td>
                    <td>{{ $word->transcript }}</td>
                    <td>{{ $word->translate }}</td>
                    @if($word->status)
                        <td class="text-success">Изучен!</td>
                    @else
                        <td class="text-danger">Не изучен!</td>
                    @endif
                    <td>
                        <a href="{{ route('words.show', $word->id) }}" class="btn btn-outline-primary">Посмотреть</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
