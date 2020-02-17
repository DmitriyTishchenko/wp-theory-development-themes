<?php

require_once __DIR__ . '/Test_Menu.php';

/*
 * подключение скриптов и стилей
 */

add_action( 'wp_enqueue_scripts', 'test_scripts' );

function test_scripts() {
    wp_enqueue_style( 'test-bootstrapcss', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'test-style', get_stylesheet_uri() );

    //wp_enqueue_script('jquery');
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

    wp_enqueue_script( 'test-popper', "//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array('jquery'), null, true);
    wp_enqueue_script( 'test-bootstrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
}

/*## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
    // размеры которые нужно удалить
    return array_diff( $sizes, array(
        'medium_large',
        'large',
    ) );
}*/

function test_setup(){
    add_theme_support('post-thumbnails');
    add_image_size( 'my-thumb', 100, 100 );
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo', array(
        'width' => '150',
        'height' => '40',
    ));
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => get_template_directory_uri() . '/assets/image/background.png',
    ));
    register_nav_menus( [
        'header_menu1' => 'Меню в шапке 1',
        'footer_menu2' => 'Меню в футере 2'
    ] );
}
add_action( 'after_setup_theme', 'test_setup' );

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}
// выводим пагинацию
the_posts_pagination( array(
    'end_size' => 2,
) );

function test_widgets_init(){
    register_sidebar(array(
       'name' => 'Сайдбар справа',
        'id' => 'right-sidebar',
        'description' => 'Область для виджетов в сайдбаре справа',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
    ));
}
add_action('widgets_init', 'test_widgets_init');