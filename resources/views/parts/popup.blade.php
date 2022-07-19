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
						<form id="request_call" action="{{ route("send_contact_form") }}" class="form" method="POST">
							@csrf
							<div class="headen_form_blk">

							<div class="form__line">
								<input type="hidden" name = "form_name" value = "Заказать звонок">
								<input type="hidden" name = "form_rasp" value = "По умолчанию">
								<input type="hidden" name = "form_address" value = "{{url()->current()}}">
								<input required type="text" name="name" placeholder="Имя" class="input_name popup__form-input input">
								<input required type="tel" name="phone" placeholder="Телефон" class="input_phone popup__form-input input _phone"> 
								
							</div>
							<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
									конфиденциальности</a></p>
							<button type = "submit" class="button new_send_btn" data-formid = "request_call">Отправить</button>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>