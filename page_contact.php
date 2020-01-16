<?php
/*
Template Name:  Контакты
 */
?>

<?php get_header(); ?>
<?php the_post();?>
	<div class="container">
        <div class="main_container_contact">
            <div class="main_container_contact_info">
                <h1 class='main_title main_title_contact'>ЭкоДренажГрад</h1>
                <div class="contact_info_page_phones">
                    <?php while ( have_rows('телефоны','option') ) : the_row(); ?>
                        <div class="contact_info_page_phone">
                            <a href="tel:<?php the_sub_field('телефон'); ?>"><?php the_sub_field('телефон'); ?></a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="contact_info_page_hours">
                    <p>Пн - Пт 10:00 - 20:00 <br>
                    Сб - Вс по предварит. записи</p>
                </div>
                <div class="contact_info_page_adress"><?= get_field('адрес','option');?></div>
                <div class="contact_info_page_mail">
                    <a href="mailto:<?= get_field('почта','option');?>"><?= get_field('почта','option');?></a>
                </div>
                <div class="contact_info_page_btn">
                    <a class='btn_default btn_callback_page_contact'  data-fancybox data-src="#callmodal" href="javascript:;">Перезвоните нам</a>
                </div>
            </div>
            <div class="main_container_contact_map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afcd4cc03a6a1371af690a768351f5b0e7137a3d69257cdedbb788bcad059ed27&amp;width=100%25&amp;height=510&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>

        </div>   
	</div>
<?php get_footer(); ?>