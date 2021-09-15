<?php get_header(); ?>
            <section class="p-hero p-hero--archive">
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
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    
                    
                    <article class="p-single">
                    <h3 class="c-title--article">Schedule<span>今月の日程</span></h3>
                    <div class="page_container">
                        <?php the_content(); ?>
                    </div>
                    </article>
                    <?php endwhile; endif; ?>
                </section><!-- /.p-main__contents -->
                <?php get_sidebar(); ?>
            </section>
        </main><!-- /.l--main -->
               
        <?php get_footer(); ?>
