<?php get_header(); ?>
<?php 
/*
Template Name: 講師紹介ページ（Instructors） */
?>
            <section class="p-hero p-hero--page">
                <h2 class="c-title--heading c-title--heading--archive"><?php wp_title(''); ?></h2>
                <img class="c-logo" src="<?php bloginfo('template_directory'); ?>/img/logo2.svg" alt="">
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
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    <?php
                    $args = array(
                        'post_type' => 'instructors-list',
                        'taxonomy' => 'dep',
                        'term' => 'organizer',
                        
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <article class="p-article">
                        <h3 class="c-title--article">Circle Organizer<span>主催者</span></h3>
                        <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <article class="c-card c-card--instructors">
                            <img src="<?php echo CFS()->get('img'); ?>" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title"><?php the_title(); ?></h4>
                                <p class="c-card__content__text"><?php echo CFS()->get('desc') ?></p>
                            </section>
                        </article>
                        <?php endwhile; ?>
                    </article>
                    <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                    <?php endif; ?>


                    <?php
                    $args = array(
                        'post_type' => 'instructors-list',
                        'taxonomy' => 'dep',
                        'term' => 'guest',
                        'order' => 'ASC',
                        'orderby' => 'modified'
                        // 'posts_per_page' => 4
                        
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <article class="p-article">
                        <h3 class="c-title--article">Guest Instructors<span>ゲスト</span></h3>
                        <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <article class="c-card c-card--instructors">
                            <img src="<?php echo CFS()->get('img'); ?>" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title"><?php the_title(); ?></h4>
                                <p class="c-card__content__text"><?php echo CFS()->get('desc') ?></p>
                            </section>
                        </article>
                        <?php endwhile; ?>
                    </article>
                    <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                    <?php endif; ?>


                    <?php
                    $args = array(
                        'post_type' => 'instructors-list',
                        'taxonomy' => 'dep',
                        'term' => 'feldenkrais',
                        
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <article class="p-article">
                        <h3 class="c-title--article">Feldenkrais<span>フェルデンクライス</span></h3>
                        <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <article class="c-card c-card--instructors">
                            <img src="<?php echo CFS()->get('img'); ?>" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title"><?php the_title(); ?></h4>
                                <p class="c-card__content__text"><?php echo CFS()->get('desc') ?></p>
                            </section>
                        </article>
                        <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                    <?php endif; ?>

                        <div class="c-button c-button--right">
                            <a href="https://studio-les-portes.localinfo.jp/pages/1593964/feldenkrais">フェルデンクライスについて
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                        <div class="c-button c-button--right">
                            <a href="https://studio-les-portes.localinfo.jp/">武政 裕美先生のHPへ
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article>

                    
                    </section><!-- /.p-main__contents -->
                    <?php get_sidebar(); ?>
            </section>
        </main><!-- /.l--main -->
        <?php get_footer(); ?>