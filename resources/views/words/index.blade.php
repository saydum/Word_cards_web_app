@extends('layout')

@section('content')
<!-- @if($finish)
        <h5 class="text-end">Цель: {{ $finish }}</h5>
    @endif -->

<!-- <a href="{{ route('cards.edit', $cardId) }}" class="btn btn-primary float-end" style="margin-bottom: 10px">Добавить</a>
    <p>
        | Кол-во слов: <b>{{ $countWords }}</b> |
        <span class="text-success"> Изучено: <b>{{ $progress }}</b></span> |
        <span class="text-danger"> Не изучено: <b>{{ $countWords - $progress }}</b></span> |
    </p> -->


<div class="grow h-14 ml-5">
    <div class="overflow-x-auto">
        <table class="table table-xs bg-base-200 rounded-box">
            <thead>
                <tr>
                    <th></th>
                    <th>Слово</th>
                    <th>Значение</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(isset($words))
                @foreach($words as $word)
                <tr>
                    <th>{{ $word->id }}</th>
                    <td>{{ $word->value }}</td>
                    <td>{{ $word->translate ? $word->translate : "null" }}</td>
                    <td>
                        <a href="{{ route('words.show', $word->id) }}" class="btn btn-outline btn-success btn-xs">
                            Открыть
                        </a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
