@extends('web.layout')

@section('content')
    <a href="#" class="btn btn-success" style="margin-bottom: 10px">Добавить</a>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Слово</th>
            <th scope="col">Транскрипт</th>
            <th scope="col">Перевод</th>
            <th scope="col">Стату</th>
            <th scope="col">Примеры</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row">1</th>
            <td>Persone</td>
            <td>ˈpərs(ə)n</td>
            <td>Человек</td>
            <td class="text-danger">Не изучен!</td>
            <td>
                <a href="#" class="btn btn-outline-success">Посмотреть</a>
            </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Hello</td>
            <td>null</td>
            <td>Привет</td>
            <td class="text-success">Изучен!</td>
            <td>
                <a href="#" class="btn btn-outline-success">Посмотреть</a>
            </td>
        </tr>

        <tr>
            <th scope="row">3</th>
            <td>Lorem</td>
            <td>ˈpərs(ə)n</td>
            <td>Человек</td>
            <td class="text-danger">Не изучен!</td>
            <td>
                <a href="#" class="btn btn-outline-success">Посмотреть</a>
            </td>
        </tr>

        </tbody>
    </table>
@endsection
