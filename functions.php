<?php 
    function custom_theme_support() {
        add_theme_support( 'html5', array(
            'search-form', 
            'comment-form', 
            'comment-list', 
            'gallery', 
            'caption',
        ));
        add_theme_support( 'menus' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );

    function tagara_script(){
        $locale = get_locale();
        $locale = apply_filters('theme_locale', $locale, 'tagara');
        if( $locale == 'ja' ) {
            wp_enqueue_style('Notosans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Noto+Serif+JP:wght@500&family=Roboto:wght@300&display=swap', array());
        }
        wp_enqueue_style('Baskervill', '//fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap', array());
        wp_enqueue_style('ress', '//unpkg.com/destyle.css@1.0.5/destyle.css', array(), '1.0.5');
        wp_enqueue_style('tagara', get_template_directory_uri().'/css/style.css',array(), '1.0.0');
        wp_enqueue_script('jquery', get_template_directory_uri().'/jquery/jquery-3.6.0.min.js',"", array(), '3.6.0', true);
        wp_enqueue_script('stylejs', get_template_directory_uri().'/jquery/style.js',array(), '1.1.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'tagara_script' );


    // <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
    // <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Noto+Serif+JP:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
    // <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    // <link href="" rel="stylesheet">
    // <script src="https://kit.fontawesome.com/b8a7fea4d4.js" crossorigin="anonymous"></script>
    // <script src="jquery/jquery-3.6.0.min.js"></script>
    // <script src=""></script>

    // <title>タガラバレエサークル〜千葉県柏市の大人向けバレエサークル〜</title>