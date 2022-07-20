@extends('layouts.all')

@section('title', "Портфолио и кейсы нашей компании - Asmi-Studio")
@section('description', "Проекты по разработке сайтов, редизайну и web программированию. Все кейсы нашей компании с подробным описанием.")

@section('img_url', asset('img/girl-coll.jpg'))

@section('content')
    <section class = "all_portfolio">
        <div class = "content">
            <div class = "breadcrumbs" id = "breadcrumbs">
                <a href = "{{ route('home') }}">Главная</a> / <span>Портфолио</span> 
            </div>
            <h1>Портфолио</h1>
            
            <div class = "all_portfolio_wraper"  >
                @foreach ($portfolio as $item)
                        
                    <a href = "{{ route('portfolio_page', ['pagename' => $item->image_folder_name ]) }}" class = "portfolio_blk" style  = "background-image: url(img/portfolio/{{ $item->image_folder_name }}/{{ $item->oblozgka }});">
                        <div class = "portfolio_descr"  style = "background-color: {{ $item->color1 }}f1;">
                                <h2>{{ $item->name }}</h2>
                        </div>
                    </a>

                @endforeach
                
                
            </div>
        </div>
    </section>
@endsection