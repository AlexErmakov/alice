
<div style="display: none;"  id="callmodal" class="modal_container">
	<div class="modal_title">Перезвоните нам</div>
	<form action="javascript:void(0)" class="js_form">
		<div class="input_field">
			<input id="ffio_1" type="text" name="name" placeholder="Иванов Алексей Алексеевич" required="">
		</div>
		<div class="input_field">
			<input id="phone_11" type="tel" name="phone" placeholder="8 (926) 000-00-00" required=>
		</div>
		<div class="input_field input_field_agree">
			<input type="checkbox" value="" required="" id="req_2" checked="">
			<label for="req_2">Даю свое согласие на обработку персональных данных</label>
		</div>
		<input type="hidden" name="sendMail" value="ermakov.ko@ya.ru">
		<input type="hidden" name="formName" value="Перезвоните нам">
		<button class="modal_btn">Отправить</button>
	</form>
</div>


<div style="display: none;" id="modal_success" class='modalka_container success_modalka'>
	<div class="success_modalka_wrap">
		<img src="<?= get_template_directory_uri();?>/images/logo.png" alt="" class="img_success_modal">
		<div class="right_modal_s">Спасибо вам, мы свяжемся с вами в ближайшее время.</div>
	</div>
</div>
