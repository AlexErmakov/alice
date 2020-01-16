<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <title><?php wp_title( '-', true, 'right' );bloginfo('name');?></title>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"/>

</head>

<body <?php body_class(); ?>>
    <header class="header_main">
        <div class="container">
            <a href="<?= get_site_url(); ?>" class="main_logo"><img src="<?= get_template_directory_uri() ?>/images/logo.png" alt=""></a>
            <div class="header_main_text">
                Дренаж участка , глубинный дренаж, софкрофт дренаж  
            </div>
            <div class="header_main_phones">
                <div class="header_main_phones-title">Бесплатный звонок</div>
                <a href="tel:<?php $phones = get_field('телефоны','option'); echo $phones[0]['телефон'];?>"><?php echo $phones[0]['телефон'];?></a>
				<a href="tel:<?php echo $phones[1]['телефон'];?>"><?php echo $phones[1]['телефон'];?></a>
            </div>
            <div class="header_main_adress">
                <div class="header_main_adress_wrap">
                    <div class="header_main_phones-title header_main_phones-adress">Мы находимся</div>
                    <div class="header_main_where_us"><?= get_field('адрес','option');?></div>
                </div>
                <a class='btn_default btn_callback_top'  data-fancybox data-src="#callmodal" href="javascript:;">Перезвоните нам</a>
            </div>
        </div>
    </header>

    <nav class="main_nav">
        <div class="container">
            <button class="btn_main_menu js_btn_main_menu">
                <span></span>
                <em>Главное меню</em>
            </button>
            <?php wp_nav_menu(array('theme_location'  => 'main_menu', 'container' => false,'menu_class'=>'js_header_menu_list header_menu_list')); ?>
           
            <div class="main_nav_speciacial"><a href="<?= get_page_link(18);?>"><span class="menu_no_skew">Скидка 5%</span></a></div>
        </div>
    </nav>
<!-- header block end -->