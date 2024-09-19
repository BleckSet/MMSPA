<?php


function interio_enqueue_scripts() {
    wp_enqueue_style( 'interio_custom_style', get_template_directory_uri() . '/style/style.css' );


    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery', 'slick-carousel'), null, true );
}

add_action( 'wp_enqueue_scripts', 'interio_enqueue_scripts' );

add_action( 'wp_enqueue_scripts', 'interio_enqueue_scripts' );

function modify_jquery() {
    if (!is_admin()) {
        wp_dequeue_script( 'jquery' );
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', false, '3.7.1' );
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'init', 'modify_jquery', 999 );

// Добавляем хук для подключения скриптов и стилей
add_action( 'wp_enqueue_scripts', 'interio_enqueue_scripts' );

// Исправление ошибок в тематической поддержке
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

// Отключение обертки элементов формы Contact Form 7 в тег <p>
add_filter( 'wpcf7_autop_or_not', '__return_false' );

// Удаление обертки <span> вокруг элементов формы Contact Form 7
add_filter( 'wpcf7_form_elements', function( $content ) {
    $content = preg_replace( '/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content );
    return $content;
} );

// Отключение расстановки тегов параграфов
remove_filter( 'the_content', 'wpautop' );     // Записи
remove_filter( 'the_excerpt', 'wpautop' );     // Цитаты
remove_filter( 'comment_text', 'wpautop' );    // Комментарии
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function custom_header() {
    get_template_part( 'header-custom' );
}
add_action( 'wp_head', 'custom_header' );
function custom_css_styles() {
    // Здесь можно установить новое значение переменной
    $new_height = '100px';
    $custom_css = ":root { --input-primary-height: $new_height!important; }";
    wp_add_inline_style( 'your-theme-style', $custom_css ); // 'your-theme-style' - это название вашего основного файла стилей (например, style.css)
}
add_action( 'wp_enqueue_scripts', 'custom_css_styles' );
