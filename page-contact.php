<?php get_header(); ?>
        <main class="l-main u-mb-s">
            <section class="p-page-description">

            </section>
            
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    
                    
                    <article class="p-single">
                        <h3 class="">コンタクト<?php the_title(); ?></h3>
                        <div class="page_container">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php endwhile; endif; ?>
                </section><!-- /.p-main__contents -->
                <?php get_sidebar(); ?>
            </section>
            <div class="c-button">
                <a href="">もっと見る
                    <span class="c-arrow"></span>
                </a>
            </div>
        </main><!-- /.l--main -->
               
        <?php get_footer(); ?>