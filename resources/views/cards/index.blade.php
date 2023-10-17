@extends('layout')

@section('content')
<!-- <a href="{{ route('cards.create') }}" class="btn btn-outline btn-primary">Добавить</a> -->

<div class="grow h-14 ml-5">
    <div class="overflow-x-auto">
        <table class="table table-xs bg-base-200 rounded-box">
            <thead>
                <tr>
                    <th></th>
                    <th>Название</th>
                    <th>Цель</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(isset($cards))
                    @foreach($cards as $card)
                    <tr>
                        <th>{{ $card->id }}</th>
                        <td>{{ $card->name }}</td>
                        <td>{{ $card->finish }}</td>
                        <td>
                            <a href="{{ route('cards.show', $card->id) }}" class="btn btn-outline btn-warning btn-xs">
                                Открыть
                            </a>

                            <form style="display: inline-block" action="{{ route('cards.destroy', $card->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline btn-error btn-xs" onclick="alert('Подтвердите действие'); return true;">
                                    Удалить
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
