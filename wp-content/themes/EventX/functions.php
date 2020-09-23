<?php

class EventX{
    public function __construct(){
        add_action('init', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'resource'));
    }

    public function resource(){
        wp_enqueue_style('jssorcss', get_template_directory_uri() . '/css/jssor.css', array() , '1.0.0', 'all');
        wp_enqueue_style('variables', get_template_directory_uri() . '/css/_variables.css', array() , '1.0.0', 'all');
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array() , '1.0.0', 'all');
        wp_enqueue_style('tablet', get_template_directory_uri() . '/css/tablet.css', array() , '1.0.0', '(max-width: 768px)');
        wp_enqueue_style('mobile', get_template_directory_uri() . '/css/mobile.css', array() , '1.0.0', '(max-width: 320px)');
        wp_enqueue_script('jssorjs', get_template_directory_uri() . '/js/jssor.slider-22.2.16.min.js', array() , '1.0.0', true);
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery') , '1.0.0', true);
    }

    public function init(){
        register_post_type('artist', [
                'label' => 'Artists',
                'menu_position' => 2,
                'public' => true,
                'supports' => ['thumbnail']
        ]);

        register_post_type('news', [
            'label' => 'News',
            'menu_position' => 3,
            'public' => true,
            'supports' => ['title', 'editor']
        ]);

        register_post_type('customize', [
            'label' => 'Customize',
            'menu_position' => 4,
            'public' => true,
            'supports' => ['']
        ]);

        register_post_type('sponsor', [
            'label' => 'Sponsor',
            'menu_position' => 5,
            'public' => true,
            'supports' => ['title', 'thumbnail']
        ]);

        /* register wp supports */
        add_theme_support('post-thumbnails');
    }
}

$theme = new EventX();