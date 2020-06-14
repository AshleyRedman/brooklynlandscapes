<?php

namespace App\Assets;

class Assets
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'fonts']);
        add_action('wp_enqueue_scripts', [$this, 'css']);
        add_action('wp_footer', [$this, 'js']);
        add_action('wp_footer', [$this, 'deregister_scripts']);
    }

    public function fonts()
    {
        // wp_enqueue_style('helvetica', get_stylesheet_directory_uri() . '/assets/fonts/Helvetica/Helvetica.css');
    }

    public function css()
    {
        wp_enqueue_style('css', get_stylesheet_directory_uri() . '/public/css/app.css');
    }

    public function js()
    {
        wp_register_script('manifest', get_stylesheet_directory_uri() . '/public/js/manifest.js');
        wp_register_script('vendor', get_stylesheet_directory_uri() . '/public/js/vendor.js');
        wp_register_script('app', get_stylesheet_directory_uri() . '/public/js/index.js');
        wp_enqueue_script('manifest');
        wp_enqueue_script('vendor');
        wp_enqueue_script('app');
    }

    public function deregister_scripts()
    {
        //wp_deregister_script('wp-embed');
        //wp_deregister_script('jquery');
    }
}

new Assets();
