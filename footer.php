		<footer class="main_footer">
			<div class="container">
				
				<div class="main_footer_nav">
					<?php wp_nav_menu(array('theme_location'  => 'add_menu_footer_1', 'container' => false,'menu_class'=>'')); ?>
					<?php wp_nav_menu(array('theme_location'  => 'add_menu_footer_2', 'container' => false,'menu_class'=>'')); ?>
					<?php wp_nav_menu(array('theme_location'  => 'add_menu_footer_3', 'container' => false,'menu_class'=>'')); ?>
					<?php wp_nav_menu(array('theme_location'  => 'add_menu_footer_4', 'container' => false,'menu_class'=>'')); ?>
				</div>
				<div class="main_footer_info">
					<div class="footer_links">
						<a href="<?= get_page_link(6);?>" class="footer_adress"><?= get_field('адрес','option');?></a>
						<div class="footer_phones">
							<a href="tel:<?php $phones = get_field('телефоны','option'); echo $phones[0]['телефон'];?>"><?php echo $phones[0]['телефон'];?></a>
							<a href="tel:<?php echo $phones[1]['телефон'];?>"><?php echo $phones[1]['телефон'];?></a>
						</div>
						<a href="mailto:<?= get_field('почта','option');?>" class="footer_mail"><?= get_field('почта','option');?></a>
						<a class='btn_default btn_callback_footer'  data-fancybox data-src="#callmodal" href="javascript:;">Перезвоните нам</a>
					</div>
				</div>
			</div>
		</footer>
		</div>
		<?php wp_footer(); ?>
		<?php get_template_part('include/metrika'); ?>
		<?php get_template_part('include/modal'); ?>
		<script>
			var themePath = "<?php echo get_template_directory_uri();?>";
		</script>
	</body>
</html>