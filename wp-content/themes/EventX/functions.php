<?php

class EventX{
    public function __construct(){
        add_action('init', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'resource'));
    }

    public function resource(){
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array() , '1.0.0', 'all');
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery') , '1.0.0', true);
    }

    public function init(){
        register_post_type('artist', [
                'label' => 'Artists',
                'menu_position' => 2,
                'public' => true,
                'supports' => ['thumbnail']
        ]);

        /* register wp supports */
        add_theme_support('post-thumbnails');
    }
}

$theme = new EventX();