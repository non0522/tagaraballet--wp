<?php 


/* テーマ機能のサポート
   ========================================================================== */
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
        /* ナビメニューの定義と設定*/
        register_nav_menus(array(
            'global_nav' => esc_html__('main_nav', 'tagara'),
            'sub_nav' => esc_html__('sub_nav', 'tagara'),
        ));
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );


/* <head>の設定
   ========================================================================== */
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


/* .svg 拡張子画像のアップロードを許可
   ========================================================================== */
   function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');


/* アイキャッチ設定で SVG 画像のサムネイルを表示（config.phpを修正する必要があり）
   ========================================================================== */
   function fix_svg_thumb_display() {
    echo 
    '<style>
      td.media-icon img[src$=".svg"], 
      img[src$=".svg"].attachment-post-thumbnail, 
      #set-post-thumbnail img[src$=".svg"]{ 
      width: 100% !important; 
      height: auto !important; 
      }
    </style>';
  }
  add_action('admin_head', 'fix_svg_thumb_display');


/* 出力されたメニューアイテムの文字列を置換（タイトル属性をタイトル下に表示）
   ========================================================================== */
   function description_in_nav_menu($item_output, $item){
       return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br /><span>{$item->attr_title}</span><", $item_output);
    }
    add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);


/* archiveをカスタマイズ（urlを付与）
   ========================================================================== */
function post_has_archive( $args, $post_type) {
    if ('post' ==$post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
