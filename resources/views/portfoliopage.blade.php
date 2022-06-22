@extends('layouts.all')

@section('title', "Портфолио и кейсы нашей компании - Asmi-Studio")
@section('description', "Проекты по разработке сайтов, редизайну и web программированию. Все кейсы нашей компании с подробным описанием.")

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
                    <span data-form = "Сайт каталог для магазина 1-й Военторг" class = "allBtn unisend_win">Хочу так же</span>
                    </p>
                </div>
                <div class = "p_picture">
                    <img src = "../img/portfolio/{{$info[0]->image_folder_name}}/{{$info[0]->page_prev}}">
                </div>
            </div>
            
            <div class = "center portfolio_all portfolio_colors">
                <h2>Цветовое решение</h2>
                <div class = "clrWraper">
                    <div class = "colorBlk" style = "background-color:#ffcb04;">#ffcb04</div>
                    <div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
                    <div class = "colorBlk" style = "background-color:#005d42;color: #FFFFFF;">#005d42</div>
                    <div class = "colorBlk" style = "background-color:#c41c35;color: white;">#c41c35</div>
                </div>
            </div>
            
            
            
            
        </div>
    </section>
@endsection