@extends('layouts.all')

@section('title', "Благодарим за обращение - Asmi-Studio")
@section('description', "Благодарим за обращение в нашу студию")

@section('img_url', asset('img/komp-bg-desctop.webp'))

@section('content')
    <section class = "thencs full_h">
        <div class = "content">
            <div class="wrap2cel">
                <div class = "cell">
                    <h1>Благодарим за обращение</h1>
                    <p>Наши специалисты свяжутся с вами в течении 15 минут.</p>
                    <a href="{{route('home')}}" class="button">Вернуться на главную</a>
                    <br>
                    <br>
                    <a href="{{route('portfolio')}}" class="button">Смотреть портфолио</a>
                </div>
                <div class = "cell">
                    <picture>
                        <source srcset="{{asset("img/15min.webp")}}" type="image/webp">
                        <img class = "main_img" src="{{asset("img/15min.jpg")}}" alt="Спасибо за обращение">
                    </picture>
                    
                </div>
            </div>

        </div>
    </section>
@endsection