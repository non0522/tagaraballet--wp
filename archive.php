<?php get_header(); ?>
        <main class="l-main u-mb-s">
            <section class="p-page-description">
                <h3 class="p-page-description__title">
                    タイトルが入ります
                </h3>
                <p class="p-page-description__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
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