<?php get_header(); ?>
        <main class="l-main u-mb-s">
            <section class="p-page-description">

            </section>
            
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    <article class="p-single">
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail('full'); ?>
                        <img src="" alt="">
                        <?php
                            if( have_posts() ) :
                                while( have_posts() ) :
                                    the_post();
                                    the_content(); ?>
                                        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>></section>
                                    <?php    
                                endwhile;
                            else: 
                        ?>
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