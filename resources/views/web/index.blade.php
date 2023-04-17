@extends('web.layout')
<style>
    .myCard {
        background: #e8e8e8;
        text-align: center;
    }
    .myCard {
        background: white;
        display: inline-block;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        border-radius: 5px;
    }
</style>
@section('content')
    <main>
        <div class="row justify-content-end">
            <div class="col-md">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                    <div class="col-md mx-auto my-5">
                        <h1 class="display-4 fw-normal">Карточки со словами!</h1>
                        <h4 class="fw-normal">Самое простое приложение для сохранения и изучения новых слом.</h4>
                    </div>
                    <a class="btn btn-outline-primary btn-lg" href="{{ route('cards.index') }}">Начать</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col myCard">
                <img class="img-fluid" src="{{ asset('img/main.png') }}" alt="Карточки со словами!">--}}
            </div>
        </div>
    </main>
@endsection
