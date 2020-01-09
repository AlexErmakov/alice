
<div style="display: none;" id="call_modal1" class='modal_container'>
	<div class='modal_title'>Связаться по проекту</div>
	<form action="javascript:void(0)"  class='js_form'>
		<div class="input_field">
			<label for="ffio">Ваше ФИО:<span class="requir">*</span></label>
			<input id='ffio' type="text" name="name" placeholder="Иванов Алексей" required>
		</div>
		<div class="input_field">
			<label for="femail">Телефон:<span class="requir">*</span></label>
			<input id='femail' type="tel" name="phone" placeholder="8 (800) 000-0000" required>
		</div>
		<input type="hidden" name="sendMail" value="ermakov.ko@ya.ru">
		<input type="hidden" name="formName" value="Связаться по проекту">
		<input type="hidden" name="namePage" class='js_name_page' value="">
		<button class='main_btn'>
			<span></span>Отправить
		</button>
	</form>
</div>

<div style="display: none;" id="call_modal" class='modal_container'>
	<div class='modal_title'>Заказать обратный звонок</div>
	<form action="javascript:void(0)"  class='js_form'>
		<div class="input_field">
			<label for="ffio">Ваше ФИО:<span class="requir">*</span></label>
			<input id='ffio' type="text" name="name" placeholder="Иванов Алексей" required>
		</div>
		<div class="input_field">
			<label for="femail">Телефон:<span class="requir">*</span></label>
			<input id='femail' type="tel" name="phone" placeholder="8 (800) 000-0000" required>
		</div>
		<input type="hidden" name="sendMail" value="ermakov.ko@ya.ru">
		<input type="hidden" name="formName" value="Заказать обратный звонок">
		<input type="hidden" name="city" value="<?php the_title();?>">
		<button class='main_btn'>
			<span></span>Отправить
		</button>
	</form>
</div>


<div style="display: none;" id="modal_success" class='modalka_container success_modalka'>
	<div class="success_modalka_wrap">
		<img src="<?= get_template_directory_uri();?>/images/logo.jpg" alt="" class="img_success_modal">
		<div class="right_modal_s">Спасибо вам, мы свяжемся с вами в ближайшее время.</div>
	</div>
</div>
