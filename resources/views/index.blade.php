@extends('layouts.all')

@section('title', "Asmi-Studio - разработка сайтов и дизайн")
@section('description', "Разработка сайтов и Web - дизайн от профессиональной веб студии,Мы создаем сайты любой сложности за минимальные сроки. Мы гарантируем индивидуальный подход к каждому клиенту.")

@section('content')
    <section class = "main_banner" style="background-image: url(img/komp-bg-desctop.webp);">
        <div class = "main_banner_info">
            <a class = "logo" href = "/"></a>
            <h1>Сайты для бизнеса а не для галочьки</h1>
            <span class = "subh1">Мы сделаем из Вашей идеи эффективный сайт приносящий прибыль</span>
            {{-- <span class = "subh1_pt">Мы не разрабатываем сайты мы делае инструменты решающие задачи Вашего бизнеса. </span> --}}
            <ul>
                <li>КАЧЕСТВЕННО</li>
                <li>БЫСТРО</li>
                <li>ВЫГОДНО</li>
            </ul>
            
            <div class = "main_banner_buttons_wrapper">
                <a href = "#consult" class = "button _popup-link" data-h2="Обсудить проект" data-rasp="Кнопка в баннере">Обсудить проект</a>
                <a href = "#pric" onclick = "_goto(this); e.stopPropagation();" class = "button button-white">Сориентироваться в ценах</a>
            </div>
            
        </div>
    </section>

    <section class = "arrow">
        <img src = "/img/rowdn.svg"/>
    </section>

    <section id = "pric" class = "web_uslugi">
        <div class = "content">
            <h2>Услуги и цены</h2>
            
            @include('parts.uslugi')
            
            <span class = "section_down_text">
                <h3>Не знаете что подойдет именно Вам? </h3>
                Оставьте заявку мы проконсультируем Вас абсолютно бесплатно и ответим <br/>на все интересующие Вас вопросы.
            </span>

            <div class = "element_to_center_wriper">
                <a href = "#consult" class = "button _popup-link" data-h2="Получить консультацию" data-rasp="Кнопка в блоке цен">Получить консультацию</a>
            </div>
        </div>
    </section>

    <section class = "web_carecter">
        <div class = "content">
            <h2>Наша Web студия в цифрах</h2>
            <div class = "cerecter_box">
                <div class = "cerecter_box_elem">
                    <div class = "cerecter_box_elem_ch">
                        <span class = "orang_text">+</span>14	
                    </div>
                    
                    <div class = "cerecter_box_elem_pt">
                        Лет на рынке разработки <br/>сайтов
                    </div>
                </div>
                
                <div class = "cerecter_box_elem">
                    <div class = "cerecter_box_elem_ch">
                        <span class = "orang_text">+</span>700	
                    </div>
                    
                    <div class = "cerecter_box_elem_pt">
                        Завершенных проектов по всем направлениям
                    </div>
                </div>
                
                <div class = "cerecter_box_elem">
                    <div class = "cerecter_box_elem_ch">
                        <span class = "orang_text">+</span>15	
                    </div>
                    
                    <div class = "cerecter_box_elem_pt">
                        Сайтов на постоянном обслуживании
                    </div>
                </div>
                
                <div class = "cerecter_box_elem">
                    <div class = "cerecter_box_elem_ch">
                        <span class = "orang_text">+</span>45 000	
                    </div>
                    
                    <div class = "cerecter_box_elem_pt">
                        Человек / день посещают  сайты разработанные нами
                    </div>
                </div>
            </div>
            
            <span class = "section_down_text">
                Опыту наших специалистов доверяют как начинающие предприниматели <br/>так и крупные холдинги федерального уровня 
            </span>
            
        </div>
    </section>



    <section class = "web_clients full-blk" style="background-image: url(img/new-clients.webp);">
        <div class = "text_iner_blk text_iner_blk_right">
            <h2>Вашему бизнесу нужны клиенты?</h2>
            <div class = "text_iner_blk_text">
                <span class = "info_text">Собственный сайт это новые возможности по привлечению клиентов  в любой бизнес.  Для Вас станут доступны все современные каналы  продвижения собственного продукта:  Контекстная реклама в Яндекс и Google, товарные агрегаторы, классическое SEO и т. д.</span>
                <h3>Закажите сайт и развивайте свой бизнес!</h3>
            </div>
            <a href="#consult" class="button _popup-link" data-h2="Обсудить проект" data-rasp="Кнопка в разделе нужны клиенты">Заказать сайт</a>
        </div>
    </section>


    @include('parts.kak_rabotaet')
    
    <section class = "web_facts full-blk" style="background-image: url(img/new-facts.webp);">
        <div class = "text_iner_blk text_iner_blk_left">
            <h2>Все еще думаете <br/>НУЖЕН ЛИ ВАМ САЙТ?</h2>
            <div class = "text_iner_blk_text">
                <span class="info_text">
                    Просто немного статистики чтобы Вам было проще определиться:
                </span>
                <div class = "facts_ct">
                    <div class = "facts_ct_element">
                        <div class = "f_cr">
                            20<span class = "orang_text">%</span>
                        </div>
                        <div class = "f_txt">
                            Средний рост объема <br/>рынка e-commerce в год
                        </div>
                    </div>
                
                
                
                    <div class = "facts_ct_element">
                        <div class = "f_cr">
                            15<span class = "orang_text">%</span>
                        </div>
                        <div class = "f_txt">
                            Ежегодное увеличение <br/>рынка On-Line рекламы
                        </div>
                    </div>
                
                
                
                    <div class = "facts_ct_element">
                        <div class = "f_cr">
                            60<span class = "orang_text">%</span>
                        </div>
                        <div class = "f_txt">
                            Предпочитают On-Line <br/>шоппинг обычному
                        </div>
                    </div>
                </div>
            </div>
            <a href="#consult" class="button _popup-link" data-h2="Обсудить прект" data-rasp="Кнопка в разделе все еще думаете">Заказать сайт</a>
        </div>
    </section>

    <section id = "preim" class = "web_vy_mi">
        <div class = "content">
            <h2>Почему выбирают нас:</h2>
            
            <div class = "vy_mi_box">
                <div class = "vy_mi_box_elem">
                    <div class = "vy_mi_img" style = "background-image:url(img/oficialno.svg);" ></div>
                    <div class = "text_group">
                        <h3>Все официально</h3>
                        <span class = "vy_mi_txt">
                            Мы заключим официальный договор и при разработке. Вы получите полный комплект технической и бухгалтерской документации.
                        </span>
                    </div>
                </div>

                <div class = "vy_mi_box_elem">
                    <div class = "vy_mi_img" style = "background-image:url(img/udobno.svg);" ></div>
                    <div class = "text_group">
                        <h3>С нами удобно</h3>
                        <span class = "vy_mi_txt">
                            Мы не будем задавать лишних вопросов. Мы полностью спроектируем Ваш сайт и воплотим проект в жизнь все что потребуется от Вас это заполнить бриф
                        </span>
                    </div>
                </div>
                
                <div class = "vy_mi_box_elem">
                    <div class = "vy_mi_img" style = "background-image:url(img/kahestvenno.svg);" ></div>
                    <div class = "text_group">
                        <h3>Качественная работа</h3>
                        <span class = "vy_mi_txt">
                            Заказав разработку сайта у нас Вам не будет стыдно за результат! Даже при минимальном бюджете Ваш сайт будет Выглядеть современно и стильно.
                        </span>
                    </div>
                </div>
                
                <div class = "vy_mi_box_elem">
                    <div class = "vy_mi_img" style = "background-image:url(img/vigodno.svg);" ></div>
                    <div class = "text_group">
                        <h3>С нами выгодно</h3>
                        <span class = "vy_mi_txt">
                            Мы всегда предлагаем разумную цену для любого нашего клиента. Мы гарантируем прозрачное  ценообразование на разработку
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('parts.portfolio_inmain')

    <section id = "faq" class = "web_faq">
        <div class = "content">
            <h2>Остались вопросы?</h2>
            
            <div class = "faq_box">
                <div class="faq_box-block">
                <div class = "faq_box_elem">
                    <div class = "qtop">
                        <div class = "krest"></div>
                        <h3 class = "q">Сколько стоит разработка сайта?</h3>
                    </div>
                    <div class = "otvet">
                        Цена сайта напрямую зависит от времени которое наша команда тратит на разработку, час работы у нас стоит 1000р. Для более точного расчета свяжитесь с нами любым удобным способом после обсуждения проекта Вы получите полную смету с указанием цен на все этапы разработки.
                    </div>
                </div>
                
                <div class = "faq_box_elem">
                    <div class = "qtop">
                        <div class = "krest"></div>
                        <h3 class = "q">Сколько времени займет разработка сайта?</h3>
                    </div>
                    <div class = "otvet">
                        В среднем разработка сайта занимает от 1 до 2 недель. Мы не делаем сайты за 1 день и стараемся не браться за горящие проекты. Спешка не приводит к качественному результату.
                    </div>
                </div>
                    
                </div>
                <div class="faq_box-block">
                    <div class = "faq_box_elem">
                        <div class = "qtop">
                            <div class = "krest"></div>
                            <h3 class = "q">Сколько стоит содержание сайта?</h3>
                        </div>
                        <div class = "otvet">
                            Содержание сайта в среднем обходится не дорого ~2000р. / год Цена складывается из оплаты хостинга и из оплаты аренды доменного имени. Но при реализации крупных проектов с высокой посещаемостью затраты на сайт могут вырасти до 4 раз.
                        </div>
                    </div>
                    
                    <div class = "faq_box_elem">
                        <div class = "qtop">
                            <div class = "krest"></div>
                            <h3 class = "q">Кому будут принадлежать права на сайт?</h3>
                        </div>
                        <div class = "otvet">
                            Мы принципиально не размещаем сайты на собственных серверах и не тянем с клиентов деньги за обслуживание. Вы получаете готовый продукт который будет размещен на Вашем хостинге и все права будут принадлежать Вам. 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
    