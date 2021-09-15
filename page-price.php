<?php get_header(); ?>
<?php 
/*
Template Name: レッスンスケジュール・料金 */
?>
            <section class="p-hero p-hero--page">
                <h2 class="c-title--heading c-title--heading--archive"><?php single_post_title() ?></h2>
                <img class="c-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo2.svg" alt="">
            </section>
            <nav class="p-subnav">
                <?php wp_nav_menu(
                    array( 
                        'theme_location' => 'sub_nav',
                        'container' => '',
                        'menu_class' => 'nav',
                        'items_wrap' => '<ul>%3$s</ul>',
                        ) 
                ); ?>
            </nav>
        </header><!-- /.l-header -->

        <main class="l-main u-mb-s">
            <section class="p-page-description">

            </section>
            
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    
                    <article id="anchor-price" class="p-article">
                        <h3 class="c-title--article"><?php echo get_post_meta('19' , 's_page-title2' ,true); ?><span><?php echo get_post_meta('19' , 's_page-title2--ja' ,true); ?></span></h3>
                        <p><?php echo get_post_meta('19' , 's_page-desc2' ,true); ?></p>
                        <div class="c-button">
                            <a href="<?php echo esc_url( home_url() ) ;?>/contact">お問い合わせ
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                        <table class="p-table--fee">
                            <tr><th colspan="2">入会金 / チケット代</th></tr>
                            <tr>
                                <td>入会金<br></td>
                                <td class="p-table--fee__desc">
                                
                                    <p><?php echo get_post_meta('19' , 'price0' ,true); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>チケット代<br></td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price1' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note1' ,true); ?></p>
                                </td>
                            </tr>
                        </table>
                        <table class="p-table--fee">
                            <tr><th colspan="2">会員レッスン料（チケット利用）</th></tr>
                            <tr>
                                <td>入門クラス<br>60分</td>
                                <td class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price2' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note2' ,true); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>オープンクラス<br>90分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price3' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note3' ,true); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>エクストラクラス<br>30分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price4' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note4' ,true); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>パ・ド・ドゥクラス<br></td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price5' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note5' ,true); ?></p>
                                </td>
                            </tr>
                        </table>
                        <table class="p-table--fee">
                            <tr><th colspan="2">ビジターレッスン料（チケットなし）</th></tr>
                            <tr>
                                <td>バレエ入門クラス<br>60分</td>
                                <td class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price6' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note6' ,true); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>バレエオープンクラス<br>90分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price7' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note7' ,true); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>エクストラクラス<br>30分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price8' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note8' ,true); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>パ・ド・ドゥクラス<br></td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price9' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note9' ,true); ?></p>
                                </td>
                            </tr>
                        </table>

                        <table class="p-table--fee">
                            <tr><th colspan="2">特別クラス</th></tr>
                            <tr>
                                <td>フェルデンクライス<br></td>
                                <td class="p-table--fee__desc">
                                    <p><?php echo get_post_meta('19' , 'price10' ,true); ?></p>
                                    <p><?php echo get_post_meta('19' , 'note10' ,true); ?></p>
                                </td>
                            </tr>
                        </table>
                        
                </section><!-- /.p-main__contents -->
                <?php get_sidebar(); ?>

            </section>

        </main><!-- /.l--main -->
        <?php get_footer(); ?>