<footer id = "contacts">
    <div class = "content">
        <div class = "fblk" id = "fblk1">
            <img class = "logo_in_footer" src = "{{ asset('img/logo-main.svg') }}"/>
            <span class = "text_pod_logo">
                Web студия полного цикла, <br/>разработка дизайн, реклама.
            </span>
        </div>
        
        <div class = "fblk" id = "fblk2">
            <h3>Меню</h3>
            <ul>
                @include('parts.menu')
            </ul>
        </div>
        
        <div class = "fblk" id = "fblk3">
            <h3>Реквизиты</h3>
            ИП Смирнов Андрей Алексеевич<br/>
            ИНН: 463246349734<br/>
            ОГРН: 313463235300020<br/>
        </div>
        
        <div class = "fblk" id = "fblk4">
            <h3>Контакты</h3>
            <a href = "tel:+79036330801">+7 903 633 08 01</a><br/>
            <a href = "mailto:info@asmi-studio.ru">info@asmi-studio.ru</a>
            <div class = "socicon_in_footer">
                @include('parts.soc_lnk')
            </div>
            
            <a href="#consult" class="button _popup-link" data-h2="Обсудить прект" data-rasp="Кнопка в подвале">Заказать сайт</a>
        </div>
    </div>
</footer>
  
<script type='text/javascript' src='{{ asset('js/jquery.js?ver=1.12.5') }}'></script>
<script type='text/javascript' src='{{ asset('js/scripts.min.js') }}'></script>
<script src="{{ asset('js/scripts.js?ver=1.0.14') }}"></script>
<script type='text/javascript' src="{{ asset('js/popup.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/goto.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/sender.js') }}"></script>