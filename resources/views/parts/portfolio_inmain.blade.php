<section id = "prtfolio" class = "web_prtfolio">
    <h2>Примеры работ:</h2>
    <div class = "web_prtfolio_box">
        @foreach ($portfolio as $item)
            <a href = "{{ route('portfolio_page', ['pagename' => $item->image_folder_name ]) }}" class = "web_prtfolio_box_elem" style = "background-image:url(img/portfolio/{{ $item->image_folder_name }}/{{ $item->oblozgka }});"></a>
        @endforeach
    </div>
    <div class = "gray_blk_in_section">
        <div class = "content">
            <div class = "info_in_gray_blk">
                <div class = "txt">
                    <h3>Нужен сайт? Не знаешь с чего начать?</h3>
                    <span>Просто оставьте заявку, мы выслушаем Вас поможем в составлении технического задания, предложим очень заманчивую цену и сделаем сайт который принесет Вашему бизнесу новых клиентов!</span>
                </div>
                
                <div class = "btn">
                    <div class = "button unisend_win" data-form="Заявка с блока Примеры работ">Заказать сайт</div>
                    <a href = "#" class = "button button-white">Все портфолио</a>
                </div>
            </div>
        </div>
    </div>
</section>