@extends('layouts.all')

@section('title', "Контакты нашей компании - Asmi-Studio")
@section('description', "Свяжитесь с нами любым удобным для Вас смособом и мы поможем Вам разработать эффективный сайт приносящий прибыль.")

@section('content')
	
    <section class = "all_portfolio">
        <div class = "content">
            <div class = "breadcrumbs" id = "breadcrumbs">
                <a href = "{{ route('home') }}">Главная</a> / <span>Контакты</span> 
            </div>
            <h1>Контакты</h1>
            
            <p>
                <a href = "tel:+79036330801">+7 903 633 08 01</a>	
            </p>
            
            <p>
                <a href = "mailto:info@asmi-studio.ru">info@asmi-studio.ru</a>	
            </p>
            
            
            <div class = "socicon_in_footer socicon_in_footer_contact_page">
                @include('parts.soc_lnk')
            </div>	
            
            
            <h2>Реквизиты</h2>
            <p>
                ИП Смирнов Андрей Алексеевич<br/>
                ИНН: 463246349734<br/>
                ОГРН: 313463235300020<br/>
            </p>

            <h2>Обратная связь</h2>
            <form method="POST" action="{{ route("send_contact_form") }}">
                @csrf

                <input type="hidden" name = "form_name" value = "Форма в контактах">
				<input type="hidden" name = "form_address"  value = "{{url()->current()}}">

                <input type="text" name = "name" placeholder="Введите ваше имя">

                @error('name')
                    <p class = "formError">{{$message}}</p>
                @enderror

                <input type="tel" name = "phone" placeholder="Введите телефон">
                
                @error('phone')
                    <p class = "formError">{{$message}}</p>
                @enderror

                <button type = "submit" class = "button">Отправить</button>
            </form>

            <h2>Как добраться</h2>
            <div id = "mapLine" class = "mapLine"></div>
            
            <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
            <script>
                ymaps.ready(init);

                function init () {
                
                var myMap = new ymaps.Map("mapLine", {
                        center: [51.72769457226839,36.164475499999966],
                        zoom: 14,
                        controls: ['zoomControl']
                    }),

                    myPlacemarkAdr = new ymaps.Placemark([51.72769457226839,36.164475499999966], {
                        iconContent: '',
                        balloonContent: 'Наш адрес: <b>г. Курск, ул. Павлуновского, д. 48а</b><br/>Телефон: <b> +7 903 633 08 01',
                        hintContent: 'Наш адрес: <b>г. Курск, ул. Павлуновского, д. 48а</b><br/>Телефон: <b> +7 903 633 08 01',
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: 'https://asmi-studio.ru/img/mappin.svg',
                        iconImageSize: [30, 54],
                        iconImageOffset: [-15, -54]
                    });
                    
                    myMap.geoObjects.add(myPlacemarkAdr);
                    
                    
                    
                    


                    myMap.behaviors.disable('scrollZoom');
                }
            </script>
            
        </div>
    </section>

@endsection