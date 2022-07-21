@extends('layouts.all')

@section('title', "Благодарим за обращение - Asmi-Studio")
@section('description', "Благодарим за обращение в нашу студию")

@section('content')
    <section class = "p404 full_h all_portfolio">
        <div class = "content">
            

            <div class="wrap2cel">
                <div class = "cell">
                    <h1>404</h1>
                    <p>Хм что то как то не то вообщем!</p>
                    <a href="{{route('home')}}" class="button">Вернуться на главную</a>
                    <br>
                    <br>
                    <a href="{{route('portfolio')}}" class="button">Смотреть портфолио</a>
                </div>
                <div class = "cell">
                    <img class = "main_img" src="{{asset("img/cone.jpg")}}" alt="Спасибо за обращение">
                </div>
            </div>

        </div>
    </section>
@endsection