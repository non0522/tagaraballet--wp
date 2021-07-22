<?php get_header(); ?>
<?php 
/*
Template Name: スタジオ紹介ページ（About Tagara） */
?>
        <main class="l-main u-mb-s">
            <section class="p-page-description">

            </section>
            
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    <article class="p-article">
                        <h3 class="c-title--article"><?php echo CFS()->get('t_page-title1'); ?><span><?php echo CFS()->get('t_page-title1--ja'); ?></span></h3>
                        <section class="p-article__content">
                            <img src="<?php echo CFS()->get('t_page-img'); ?>" alt="">
                            
                            <!-- <img src="/img/introduce.jpg" alt=""> -->
                            <p class="p-article__content__text">
                                <?php echo CFS()->get('t_desc1'); ?>
                            </p>
                        </section>
                        <div class="c-button">
                            <a href="">詳細はこちら
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article>
                    <article class="p-article p-article--map">
                        <h3 class="c-title--article"><?php echo CFS()->get('t_page-title2'); ?><span><?php echo CFS()->get('t_page-title2--ja'); ?></span></h3>
                        <!-- <h3 class="">タイトルが入ります</h3> -->
                        <p><?php echo CFS()->get('t_desc2'); ?></p>
                        <section class="p-article__content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.372514838125!2d139.9643263150392!3d35.86438698015202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60189cef7183e723%3A0x6ec57f65faba0ac3!2z5p-P44Ko44Or44OiIOODrOODs-OCv-ODq-OCueOCv-OCuOOCqg!5e0!3m2!1sja!2sjp!4v1626599787656!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <ul class="p-article__content__text"><?php echo CFS()->get('t_address') ; ?></ul>
                        </section>
                        <div class="c-button">
                            <a href="">お問い合わせ
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article>
                </section><!-- /.p-main__contents -->
                <?php get_sidebar(); ?>
            </section>

        </main><!-- /.l--main -->
        <?php get_footer(); ?>