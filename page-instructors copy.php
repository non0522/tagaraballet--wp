<?php get_header(); ?>

        <main class="l-main u-mb-s">
            <section class="p-main">
                <section class="p-main__contents u-mb-s">

		<section class="works_list">
			<div class="head">制作実績</div>
			<div class="news_list">
				<?php
				$args = array(
					'post_type' => 'instructors-list', // 投稿タイプスラッグ
					'posts_per_page' => 3
				);
				$the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）				
				?>
				<ul>
					<?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink() ;?>">
							<div class="img"><img src="<?php echo CFS()->get('img') ;?>" alt=""></div>
							<div class="type">業種：<?php echo CFS()->get('name') ;?></div>
							<div class="client">クライアント：<?php echo CFS()->get('desc') ;?></div>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
                <div class="btn_stn"><a href="<?php bloginfo('url') ;?>/works">一覧をみる</a></div>
            </div>
        </section>




                    <article class="p-article">
                        <h3 class="c-title--article">Guest Instructors<span>ゲスト講師のご紹介</span></h3>
                        <article class="c-card c-card--instructors">
                            <img src="/img/kato.gif" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title">多我羅 冴子</h4>
                                <p class="c-card__content__text">４歳よりバレエを始める。 松山バレエ学校、支部、本校を経て日本女子体育大学舞踊学専攻入学。在学中から様々なジャンルのダンスを学び、卒業後フリー。発表会や舞台で主役、ソリストを踊り、コンテンポラリーも経験。 現在バレエ教師として東京、千葉、神奈川にてクラスを多数持つ。</p>
                            </section>
                        </article>
                        <article class="c-card c-card--instructors">
                            <img src="/img/kato.gif" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title">多我羅 冴子</h4>
                                <p class="c-card__content__text">４歳よりバレエを始める。 松山バレエ学校、支部、本校を経て日本女子体育大学舞踊学専攻入学。在学中から様々なジャンルのダンスを学び、卒業後フリー。発表会や舞台で主役、ソリストを踊り、コンテンポラリーも経験。 現在バレエ教師として東京、千葉、神奈川にてクラスを多数持つ。</p>
                            </section>
                        </article>
                        <article class="c-card c-card--instructors">
                            <img src="/img/kato.gif" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title">多我羅 冴子</h4>
                                <p class="c-card__content__text">４歳よりバレエを始める。 松山バレエ学校、支部、本校を経て日本女子体育大学舞踊学専攻入学。在学中から様々なジャンルのダンスを学び、卒業後フリー。発表会や舞台で主役、ソリストを踊り、コンテンポラリーも経験。 現在バレエ教師として東京、千葉、神奈川にてクラスを多数持つ。</p>
                            </section>
                        </article>
                        <article class="c-card c-card--instructors">
                            <img src="/img/kato.gif" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title">多我羅 冴子</h4>
                                <p class="c-card__content__text">４歳よりバレエを始める。 松山バレエ学校、支部、本校を経て日本女子体育大学舞踊学専攻入学。在学中から様々なジャンルのダンスを学び、卒業後フリー。発表会や舞台で主役、ソリストを踊り、コンテンポラリーも経験。 現在バレエ教師として東京、千葉、神奈川にてクラスを多数持つ。</p>
                            </section>
                        </article>
                    </article>
                    <article class="p-article">
                        <h3 class="c-title--article">Circle Organizer<span>主催者</span></h3>
                        <article class="c-card c-card--instructors">
                            <img src="/img/kato.gif" alt="">
                            <section class="c-card__content">
                                <h4 class="c-card__content__title">多我羅 冴子</h4>
                                <p class="c-card__content__text">４歳よりバレエを始める。 松山バレエ学校、支部、本校を経て日本女子体育大学舞踊学専攻入学。在学中から様々なジャンルのダンスを学び、卒業後フリー。発表会や舞台で主役、ソリストを踊り、コンテンポラリーも経験。 現在バレエ教師として東京、千葉、神奈川にてクラスを多数持つ。</p>
                            </section>
                        </article>
                        <div class="c-button c-button--right">
                            <a href="">フェルデンクライスについて
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                        <div class="c-button">
                            <a href="">外部紹介HPへ
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                    </article>

                    
                    </section><!-- /.p-main__contents -->
                    <?php get_sidebar(); ?>
            </section>
        </main><!-- /.l--main -->
        <?php get_footer(); ?>