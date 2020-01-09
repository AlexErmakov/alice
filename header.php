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
            <a href="<?= get_site_url(); ?>" class="main_logo"><img src="<?= get_template_directory_uri() ?>/images/logo.jpg" alt=""></a>
        </div>
    </header>
<!-- header block end -->