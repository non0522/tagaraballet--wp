<?php get_header(); ?>
        <main class="l-main u-mb-s">
            <section class="p-news">
                <h3 class="c-title--article">What's New<span>新着情報</span></h3>
                <ul class="p-news__list"> 
                    <?php if( have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <article class="c-card">
                                <?php the_post_thumbnail(); ?>
                                <!-- <img src="/img/アセット 9.svg" alt=""> -->
                                <section class="c-card__content">
                                    <p class="c-card__content__date"><?php echo get_the_date('Y.m.d');?></p>
                                    <h4 class="c-card__content__title"><?php the_title(); ?></h4>
                                    <p class="c-card__content__text"><?php remove_filter('the_content', 'wpautop'); ?><?php the_content(); ?></p>
                                </section>
                            </article>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                </ul><!-- /.p-news__list -->
                <div class="c-button">
                    <a href="<?php bloginfo('url') ;?>/blog">もっと見る
                        <span class="c-arrow"></span>
                    </a>
                </div>
            </section><!-- /.p-news -->
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    <article class="p-article p-concept">
                        <h3 class="c-title--article"><?php echo CFS()->get('t_title', '17'); ?><span><?php echo CFS()->get('t_title--ja', '17'); ?></span></h3>
                        <section class="p-article__content">
                            <img src="<?php echo CFS()->get('t_img', '17'); ?>" alt="">
                            <p class="p-article__content__text"><?php echo CFS()->get('t_digest', '17'); ?></p>
                        </section>
                        <div class="c-button">
                            <a href="<?php bloginfo('url') ;?>/tagara">詳細はこちら
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article><!-- /.p-concept -->
                    <article class="p-article p-lesson">
                        <h3 class="c-title--article"><?php echo CFS()->get('s_title', '19'); ?><span><?php echo CFS()->get('s_title--ja', '19'); ?></span></h3>
                        <section class="p-article__content">
                            <img src="<?php echo CFS()->get('s_img', '19'); ?>" alt="">
                            <p class="p-article__content__text"><?php echo CFS()->get('s_digest', '19'); ?></p>
                        </section>
                        <div class="c-button">
                            <a href="<?php bloginfo('url') ;?>/schedule">詳細はこちら
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article><!-- /.p-lesson -->
                    <article class="p-article p-instructors">
                        <h3 class="c-title--article"><?php echo CFS()->get('i_title', '25'); ?><span><?php echo CFS()->get('i_title--ja', '25'); ?></span></h3>
                        <section class="p-article__content">
                            <img src="<?php echo CFS()->get('i_img', '25'); ?>" alt="">
                            <p class="p-article__content__text"><?php echo CFS()->get('i_digest', '25'); ?></p>
                        </section>
                        <div class="c-button">
                            <a href="<?php bloginfo('url') ;?>/instructors">詳細はこちら
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article><!-- /.p-instructors -->
                </section>
                <?php get_sidebar(); ?>
            </section>
        </main><!-- /.l--main -->
        
        <?php get_footer(); ?>