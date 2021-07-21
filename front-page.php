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
                        <h3 class="c-title--article">About Tagara<span>タガラについて</span></h3>
                        <section class="p-article__content">
                            <img src="/img/top-bar.jpg" alt="">
                            <p class="p-article__content__text">
                                〜大人の方のバレエサークル〜
                                <br>千葉県柏駅徒歩５分の場所にあるにスタジオで未経験から上級までクラスを行なっています。千葉県柏駅徒歩５分の場所にあるにスタジオで未経験から上級までクラスを行なっています。千葉県柏駅徒歩５分の場所にあるにスタジオで未経験から上級までクラスを行なっています。
                            </p>
                        </section>
                        <div class="c-button">
                            <a href="">詳細はこちら
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article><!-- /.p-concept -->
                    <article class="p-article p-lesson">
                        <h3 class="c-title--article">Schedule / Fee<span>レッスン日程・料金</span></h3>
                        <section class="p-article__content">
                            <img src="/img/lessonschedul.jpg" alt="">
                            <p class="p-article__content__text">
                                週3回６クラス。基本レッスンに加え、パ・ド・ドゥクラス、フェルデンクライスクラスも実施しています。週3回６クラス。基本レッスンに加え、パ・ド・ドゥクラス、フェルデンクライスクラスも実施しています。週3回６クラス。基本レッスンに加え、パ・ド・ドゥクラス、フェルデンクライスクラスも実施しています。
                            </p>
                        </section>
                        <div class="c-button">
                            <a href="">詳細はこちら
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article><!-- /.p-lesson -->
                    <article class="p-article p-instructors">
                        <h3 class="c-title--article">Instructors<span>講師紹介</span></h3>
                        <section class="p-article__content">
                            <img src="/img/index-instructors.jpg" alt="">
                            <p class="p-article__content__text">
                                〜Tagara Ballet Circleの講師陣のご紹介〜
                                <br>経験豊富な講師陣が楽しく学べるレッスンをご提供しています。経験豊富な講師陣が楽しく学べるレッスンをご提供しています。経験豊富な講師陣が楽しく学べるレッスンをご提供しています。
                            </p>
                        </section>
                        <div class="c-button">
                            <a href="">詳細はこちら
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article><!-- /.p-instructors -->
                </section>
                <?php get_sidebar(); ?>
            </section>
        </main><!-- /.l--main -->
        
        <?php get_footer(); ?>