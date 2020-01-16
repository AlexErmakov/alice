<?php get_header(); ?>

<div class="not_404">
	<div class="container">
		<div class="not_404_wrap">
			<div class="not_found_404">404</div>
			<div class="not_found_404_info">
				<div class="not_found_404_i_title">ОШИБКА 404</div>
				<div class="not_found_404_i_sub-title">Страница не найдена</div>
				<p>Неправильно набран адрес или такой<br>страницы не существует</p>
				<a href="<?= get_site_url();?>" class="btn_def">На главную</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
