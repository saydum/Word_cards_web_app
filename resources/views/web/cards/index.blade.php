@extends('web.layout')

@section('content')
    <a href="{{ route('cards.create') }}" class="btn btn-primary float-end" style="margin-bottom: 10px">Добавить</a>

    <table class="table table-hover table-bordered table-sm">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Название</th>
            <th scope="col">Цель</th>
            <th scope="col" class="text-end">Действие</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($cards))
            @foreach($cards as $card)
                <tr>
                    <th scope="row">{{ $card->id }}</th>
                    <td>{{ $card->name }}</td>
                    <td>{{ $card->finish }}</td>
                    <td class="text-end">
                        <a class="btn text-success" href="{{ route('cards.show', $card->id) }}">
                            Открыть
                        </a>
                        <form style="display: inline-block" action="{{ route('cards.destroy', $card->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn text-danger" type="submit" onclick="alert('Подтвердите действие'); return true;">
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
