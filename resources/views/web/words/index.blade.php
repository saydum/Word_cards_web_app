@extends('web.layout')

@section('content')
    <a href="{{ route('words.create') }}" class="btn btn-primary float-end" style="margin-bottom: 10px">Добавить</a>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
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
                    <th scope="row">{{ $word->id }}</th>
                    <td>{{ $word->value }}</td>
                    <td>{{ $word->transcript }}</td>
                    <td>{{ $word->translate }}</td>
                    <td class="text-danger">Не изучен!</td>
                    <td>
                        <a href="{{ route('words.show', $word->id) }}" class="btn btn-outline-primary">Посмотреть</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
