<?php get_header(); ?>

<section class="p-hero p-hero--archive">
                <h2 class="c-title--heading c-title--heading--archive">Search Result</h2>
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
            <section class="p-page-description">
                <p class="p-page-description__text">
                    以下に検索結果を表示しています。
                </p>
            </section>
            
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    <section class="p-archive">
                        <ul class="p-archive__list"> 
                            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <article class="c-card">
                                        <?php the_post_thumbnail(); ?>
                                        <!-- <img src="/img/introduce.jpg" alt=""> -->
                                        <section class="c-card__content">
                                            <p class="c-card__content__date"><?php echo get_the_date('Y.m.d'); ?></p>
                                            <h4 class="c-card__content__title"><?php the_title(); ?></h4>
                                            <p class="c-card__content__text"><?php remove_filter('the_content', 'wpautop'); ?><?php the_content(); ?></p>
                                        </section>
                                    </article>
                                </a>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul><!-- /.p-news__list -->
                    </section><!-- /.p-news -->
                    <nav class="p-pagination">
                        <?php wp_pagenavi(); ?>
                    </nav>
                </section><!-- /.p-main__contents -->
                <?php get_sidebar(); ?>
            </section>
        </main><!-- /.l--main -->
        <?php get_footer(); ?>