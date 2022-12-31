@extends('web.layout')

@section('content')
    <a href="{{ route('cards.create') }}" class="btn btn-primary float-end" style="margin-bottom: 10px">Добавить</a>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Название</th>
            <th scope="col" class="text-end">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cards as $c)
            <tr>
                <th scope="row">{{ $c->id }}</th>
                <td>{{ $c->name }}</td>
                <td class="text-end">
                    <form style="display: inline-block" action="{{ route('cards.destroy', $c->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="alert('Подтвердите действие'); return true;">
                            Удалить
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
