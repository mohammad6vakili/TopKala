<?php

    function topKala_theme_support(){
        // Add dynamic title tag support
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme','topKala_theme_support');

    function topKala_menus(){
        $locations = array(
            'primary'=>"Mega Menu",
            'footer'=>"Footer Mega Menu"
        )
        register_nav_menus($locations);
    }
    add_action('init','topKala_menus');

    function topKala_register_styles(){
        $version=wp_get_theme()->get('Version');
        wp_enqueue_style('topkala-style',get_template_directory_uri()."/style.css",array(),$version,'all');
        wp_enqueue_style('topkala-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'1.0.1','all');
        wp_enqueue_style('topkala-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'1.0.1','all');
    }
    add_action('wp_enqueue_scripts','topKala_register_styles');

    function topKala_register_scripts(){
        wp_enqueue_script('topkala-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true);
        wp_enqueue_script('topkala-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(),'1.16.0',true);
        wp_enqueue_script('topkala-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(),'4.4.1',true);
        wp_enqueue_script('topkala-main',get_template_directory_uri()."/assets/js/main.js",array(),'1.0.1',true);

    }
    add_action('wp_enqueue_scripts','topKala_register_scripts');
?>