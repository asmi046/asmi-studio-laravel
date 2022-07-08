<div class="popup popup_consult">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div> 
			<div class="popup__item d-flex">
				<div class="popup__img">
					<picture>
						<source srcset="{{asset('/img/popup.webp')}}" type="image/webp"><img src="{{asset('/img/popup.jpg')}}" alt="">
					</picture>
				</div>
				<div class="popup__form-block">  
					<h2>Заказать звонок</h2> 

						<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
						<form id="request_call" class="form">
							
							<div class="SendetMsg form_msg" style="display:none;"> 
								Ваше сообщение успешно отправлено.
							</div>
							<div class="headen_form_blk">

							<div class="form__line">
								<input type="hidden" name = "form_name" data-valuem = "Название формы" value = "Заказать звонок">
								<input type="hidden" name = "form_address" data-valuem = "Адрес страницы" value = "">
								<input required type="text" name="name" data-valuem = "Имя" placeholder="Имя" class="popup__form-input input">
								<input required type="tel" name="tel" data-valuem = "Телефон" placeholder="Телефон" class="popup__form-input input _phone"> 
							</div>
							<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
									конфиденциальности</a></p>
							<button type = "submit" class="button" data-formid = "request_call">Заказать</button>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>