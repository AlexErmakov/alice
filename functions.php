<?php
    add_theme_support( 'post-thumbnails');

    if( function_exists('acf_add_options_page') ) {     
        acf_add_options_page();
    }

    
    function wps_display_attachment_settings() {
        update_option( 'image_default_align', 'none' );
        update_option( 'image_default_link_type', 'none' );
        update_option( 'image_default_size', 'large' );
    }
    add_action( 'after_setup_theme', 'wps_display_attachment_settings' );





 

    register_nav_menus(array( 
        'main_menu' => 'Главное меню',
        'add_menu_footer_1' => 'Меню подвала 1',
        'add_menu_footer_2' => 'Меню подвала 2',
        'sidebar_menu' => 'Меню sidebara'
    ));


add_action( 'wp_head', 'favicon' );
function favicon(){
  ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/manifest.json">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
  <?php
}




    register_sidebar(array( 
        'name' => 'Сайдбар сайта', 
        'id' => "sidebar", 
        'description' => 'Обычная колонка в сайдбаре',
    ));

    
    function add_scripts() {
        if(is_admin()) return false;
        wp_deregister_script('jquery'); 
        wp_enqueue_script('jquery','https://code.jquery.com/jquery-2.2.4.min.js','','',true);
        wp_enqueue_script('slick_js','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js','','',true);
        wp_enqueue_script('fancybox_js','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js','','',true);
        wp_enqueue_script('main', get_template_directory_uri().'/js/main.js?v=1','','',true);
    }

    function add_styles() {
        if(is_admin()) return false; 
        wp_enqueue_style( 'bs', get_template_directory_uri().'/css/normalize.css' );
        wp_enqueue_style( 'slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
        wp_enqueue_style( 'fancybox_css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css' );
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
        wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css?v=1' );
        wp_enqueue_style( 'media_css', get_template_directory_uri().'/css/media.css?v=1' );
    }

    add_action('wp_footer', 'add_scripts');
    add_action('wp_print_styles', 'add_styles');


    get_template_part('include/in_function/mydefault');
 
    function create_my_post_types() {
          // register_post_type(
          //    'project',
          //     array(
          //        'labels' => array( 'name' => __('Проекты'),
          //        'singular_name' => __( 'Проект' ) ),
          //        'supports'      => array( 'title', 'thumbnail','editor'),
          //        'public' => true,
          //        'has_archive' => true, 
          //    )
          // );
     }

     function create_my_tax() {
        // register_taxonomy(
        //     'catalog',
        //     'project',
        //     array(
        //         'label' => __( 'Категории проектов' ),
        //         'hierarchical'=> true

        //     )
        // );
    }

    add_action( 'init', 'create_my_post_types' );
    add_action( 'init', 'create_my_tax' );
?>