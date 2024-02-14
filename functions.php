<?php
/**
 * Загрузить скрипты и стили темы
 */
function load_style_script() {
    // Подключаем jQuery
    wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');

    // Подключаем jqFancyTransitions
    wp_enqueue_script('jqFancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js', array('jquery_my'), '', true);

    // Подключаем стили темы
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

// Прикрепляем функцию к хуку wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'load_style_script');

/* Menu */
register_nav_menu( 'menu', 'Primary Menu');

 /*Карточки товаров ИИ*/
 function create_custom_post_type() {
    register_post_type('products',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'create_custom_post_type');


 
