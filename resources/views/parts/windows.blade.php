<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>
  <div style="display: none;">
    <div class="box-modal" id="order_site_modal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
				
		<div class = "wraper">
			<img class = "box_img" src = "{{ asset('img/girl-coll.jpg') }}">	
			
		</div>
			
        <form action="">
			<h2>Заказать сайт </h2>
          
			
			<input class = "nameForm" type="text" name="name" placeholder="Ваше имя">
            <input class = "nameTel" type="tel" name="phone" placeholder="Ваш телефон">
            <input type="hidden" name="partner">
            <input class = "formthem" type="hidden" name="form" value = "Стандартное окно">
            <span class = "policy_text">Заполняя и отправляя данную форму Вы соглашаетесь с условиями <a href = "{{ route('policy') }}">политики конфиденциальности и обработки персональных данных</a></span>
            <div class="unisend_btn button">Отправить</div>
        </form>
        
    </div>
  </div>
  
  <div style="display: none;">
    <div class="box-modal" id="order_uslugi_modal">
        <div class="box-modal_close arcticmodal-close"></div>
				
		<div class = "wraper_uslugi_img"></div>
		
		<div class = "wraper_uslugi_text">
			<h2></h2>
			<div class = "main_text">
			</div>
			<div class = "wraper_uslugi_text_price">от <span class = "price"></span> р.</div>
		</div>
			
        <form action="">
            <input class = "nameForm" type="text" name="name" placeholder="Ваше имя">
            <input class = "nameTel" type="tel" name="phone" placeholder="Ваш телефон">
            <input type="hidden" name="partner">
            <input class = "formthem" type="hidden" name="form" value = "Услуга">
            <span class = "policy_text">Заполняя и отправляя данную форму Вы соглашаетесь с условиями <a href = "{{ route('policy') }}">политики конфиденциальности и обработки персональных данных</a></span>
			<div class="unisend_btn button">Заказать</div>
        </form>
        
    </div>
  </div>