<?php 


/* テーマ機能のサポート
   ========================================================================== */
    function custom_theme_support() {
        add_theme_support( 'html5', array(
            'search-form', 
            'comment-form', 
            'comment-list', 

            'caption',
        ));

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        /* ナビメニューの定義と設定*/
        register_nav_menus(array(
            'main_nav' => esc_html__('main_nav', 'tagara'),
            'sub_nav' => esc_html__('sub_nav', 'tagara'),
        ));
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );


/* <head>の設定
   ========================================================================== */
    function tagara_script(){
        $locale = get_locale();
        $locale = apply_filters('theme_locale', $locale, 'tagara');
		wp_enqueue_style('ress', '//unpkg.com/destyle.css@1.0.5/destyle.css', array(), '1.0.5');
        if( $locale == 'ja' ) {
            wp_enqueue_style('Notosans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap', array(), '') ;
            wp_enqueue_style('Notoserif', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&display=swap', array(), '') ;
            wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap', array(), '') ;
        }
		//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap
		//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&display=swap
		//fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap
        wp_enqueue_style('Baskervill', '//fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap', array(), '') ;
        wp_enqueue_style('tagara', get_template_directory_uri().'/css/style.css',array(), '1.0.0');
        wp_enqueue_script('jquery', get_template_directory_uri().'/jquery/jquery-3.6.0.min.js',"", array(), '3.6.0', true);
        wp_enqueue_script('stylejs', get_template_directory_uri().'/jquery/style.js',array(), '1.1.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'tagara_script' );




/* 出力されたメニューアイテムの文字列を置換（タイトル属性をタイトル下に表示）
   ========================================================================== */
   function attribute_in_nav_menu($item_output, $item){
       return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br /><span>{$item->attr_title}</span><", $item_output);
    }
    add_filter('walker_nav_menu_start_el', 'attribute_in_nav_menu', 10, 4);


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



/* パンくずリストの作成
   ========================================================================== */
function mytheme_breadcrumb() {
	//HOME>と表示
	$sep = '>';
	echo '<li><a href="'.esc_url( home_url( '/' ) ).'" >HOME</a></li>';
	echo $sep;
 
	//投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
	$cats = '';
	$cat_id = '';
	if ( is_single() ) {
		$cats = get_the_category();
		if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
	}
	else if ( is_category() ) {
		$cats = get_queried_object();
		$cat_id = $cats->parent;
	}
	$cat_list = array();
	while ($cat_id != 0){
		$cat = get_category( $cat_id );
		$cat_link = get_category_link( $cat_id );
		array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
		$cat_id = $cat->parent;
	}
	foreach($cat_list as $value){
		echo '<li>'.$value.'</li>';
		echo $sep;
	}
 
	//現在のページ名を表示
	if ( is_singular() ) {
		if ( is_attachment() ) {
			previous_post_link( '<li>%link</li>' );
			echo $sep;
		}
		the_title( '<li>', '</li>' );
	}
	else if( is_archive() ) the_archive_title( '<li>', '</li>' );
	else if( is_search() ) echo '<li>検索 : '.get_search_query().'</li>';
	else if( is_404() ) echo '<li>ページが見つかりません</li>';
}






/* 出力されたメニューアイテムの説明を表示
   ========================================================================== */
function prefix_nav_description( $item_output, $item, $depth, $args ) {
 if ( !empty( $item->description ) ) {
 $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<strong>' . $item->title . '</strong>' . '<span class="menu-item-description">' . $item->description . '</span>' , $item_output );
 }
 return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


/* single.phpとpage.phpで目次を自動作成（見出しが４つ以上になったとき）
   ========================================================================== */
function my_add_content($content) {
	if (is_single() || is_page()) {
	  $pattern = '/<h[2]>(.*?)<\/h[2]>/i';
	  preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);
  
	  if (count($matches) > 3) {
		$toc = '<h2>目次</h2><ol>';
		$i = 0;
  
		foreach ($matches as $element) {
		  $i++;
		  $id = 'chapter-' . $i;
		  $chapter = preg_replace('/<(.+?)>(.+?)<\/(.+?)>/',  '<$1 id ="' . $id . '">$2</$3>', $element[0]);
		  $content = preg_replace($pattern, $chapter, $content, 1);
		  $title = $element[1];
		  $toc .= '<li><a href="#' . $id . '">' . $title . '</a></li>';
		}
		
		$toc .= '</ol>';
		$content = $toc . $content;
	  }
	}
	return $content;
  }
  add_filter('the_content', 'my_add_content');