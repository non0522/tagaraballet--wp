<?php get_header(); ?>

<section class="p-hero p-hero--archive">
                <h2 class="c-title--heading c-title--heading--archive">Blog</h2>
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
                    <article class="p-single">
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                            <div class="wrapper u-m0">
                                <div class="c-breadcrumb">
                                    <?php mytheme_breadcrumb(); ?>
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <p class="c-date"><?php the_date('Y.m.d'); ?></p>
                            </div>
                            <?php the_post_thumbnail('full'); ?>
                            <?php the_content(); ?>
                            <div class="p-pagelink">
                                <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
                            </div>
                            <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>></section>
                        <?php endwhile; else: ?>
                        <p>表示できる記事がありません。</p>
                        <?php endif; ?>
                    </article>
                    <div class="p-pagination--single">
                        <?php previous_post_link('%link', '«　前の記事へ'); ?>
                        <?php next_post_link('%link', '次の記事へ　»'); ?>
                    </div>
                </section><!-- /.p-main__contents -->
                <?php get_sidebar(); ?>
            </section>
        </main><!-- /.l--main -->
        <?php get_footer(); ?>