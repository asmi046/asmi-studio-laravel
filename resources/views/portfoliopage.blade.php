@extends('layouts.all')

@section('title', $info[0]->seo_title)
@section('description', $info[0]->seo_description)

@section('content')
    <section class = "portfolio_section">
        <div class = "content">
            <div class = "breadcrumbs">
                <a href = "{{ route('home') }}">Главная</a> / <a href = "{{ route('portfolio') }}">Портфолио</a> / Сайт каталог для магазина 1-й Военторг
            </div>
            <div class = "center portfolio_osnblk">
                <div class = "p_info">
                    <h1>{{$info[0]->name}}</h1>
                    <p>{{$info[0]->content}}</p>
                    <p>
                    <a href = "#consult" class = "button _popup-link" data-h2="Обсудить проект" data-rasp="Хочу так же проект - {{$info[0]->name}}">Хочу так же</a>
                    </p>
                </div>
                <div class = "p_picture">
                    <img src = "../img/portfolio/{{$info[0]->image_folder_name}}/{{$info[0]->page_prev}}">
                </div>
            </div>
            
            <div class = "center portfolio_all portfolio_colors">
                <h2>Цветовое решение</h2>
                <div class = "clrWraper">
                    <div class = "colorBlk" style = "background-color:{{$info[0]->color1}};">{{$info[0]->color1}}</div>
                    <div class = "colorBlk" style = "background-color:{{$info[0]->color2}}; border: 1px solid #28475C;">{{$info[0]->color2}}</div>
                    <div class = "colorBlk" style = "background-color:{{$info[0]->color3}};color: #FFFFFF;">{{$info[0]->color3}}</div>
                    <div class = "colorBlk" style = "background-color:{{$info[0]->color4}};color: white;">{{$info[0]->color4}}</div>
                </div>
            </div>
            
            @foreach ($img as $key => $value)
                <div class = "center portfolio_all @if ($key === "Адаптация под мобильные устройства") portfolio_mobile @else portfolio_image @endif">
                    <h2>{{$key}}</h2>
                    @foreach ($value as $im)
                        <img src = "{{asset('img/portfolio/'.$im->post_name.'/'.$im->img)}}">
                    @endforeach
                </div>
            @endforeach
            
            
        </div>
    </section>
@endsection