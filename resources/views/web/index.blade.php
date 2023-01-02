@extends('web.layout')

@section('content')
    <main>
        <div class="row">
            <div class="col-md-8">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                    <div class="col-md-8 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 fw-normal">Карточки со словами!</h1>
                        <p class="lead fw-normal">Самое простое приложение для сохранения и изучение новых слом.</p>
                        <a class="btn btn-outline-primary " href="{{ route('cards.index') }}">Начать</a>
                    </div>
                    <div class="product-device shadow-sm d-none d-md-block"></div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://i.pinimg.com/originals/5e/8c/3a/5e8c3aed42b5ce88f8c6866cd798cf36.png">
            </div>
            </div>
        </div>
    </main>
@endsection
