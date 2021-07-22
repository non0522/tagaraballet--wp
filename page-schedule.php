<?php get_header(); ?>
<?php 
/*
Template Name: レッスンスケジュール・料金 */
?>

        <main class="l-main u-mb-s">
            <section class="p-page-description">

            </section>
            
            <section class="p-main">
                <section class="p-main__contents u-mb-s">
                    <article class="p-article">
                        <h3 class="c-title--article"><?php echo CFS()->get('s_page-title1'); ?><span><?php echo CFS()->get('s_page-title1--ja'); ?></span></h3>
                        <p><?php echo CFS()->get('s_page-desc1'); ?></p>
 
                        <div class="c-button">
                            <a href="">今月の特別レッスン
                                <span class="c-arrow"></span>
                            </a>
                        </div>
                        <div class="p-table--schedule">
                            <ul class="p-table--schedule__time"> 
                                <li class="top-line time"></li>
                                <li class="time">午前<span><br>AM</span></li>
                                <li class="time">午後<span><br>PM</span></li>
                                <li class="time"></li>
                                <li class="time"></li>
                            </ul>
                            <ul>
                                <li class="top-line">MONDAY<span><br>月曜日</span></li>
                                <li><div><?php echo CFS()->get('mon1'); ?></div></li>
                                <li><div><?php echo CFS()->get('mon2'); ?></div></li>
                                <li><div><?php echo CFS()->get('mon3'); ?></div></li>
                                <li><div><?php echo CFS()->get('mon4'); ?></div></li>
                            </ul>
                            <ul>
                                <li class="top-line">TUESDAY<span><br>火曜日</span></li>
                                <li><div><?php echo CFS()->get('tue1'); ?></div></li>
                                <li><div><?php echo CFS()->get('tue2'); ?></div></li>
                                <li><div><?php echo CFS()->get('tue3'); ?></div></li>
                                <li><div><?php echo CFS()->get('tue4'); ?></div></li>
                            </ul>
                            <ul>
                                <li class="top-line">WEDNESDAY<span><br>水曜日</span></li>
                                <li><div><?php echo CFS()->get('wed1'); ?></div></li>
                                <li><div><?php echo CFS()->get('wed2'); ?></div></li>
                                <li><div><?php echo CFS()->get('wed3'); ?></div></li>
                                <li><div><?php echo CFS()->get('wed4'); ?></div></li>
                            </ul>
                            <ul>
                                <li class="top-line">THURSDAY<span><br>木曜日</span></li>
                                <li><div><?php echo CFS()->get('thu1'); ?></div></li>
                                <li><div><?php echo CFS()->get('thu2'); ?></div></li>
                                <li><div><?php echo CFS()->get('thu3'); ?></div></li>
                                <li><div><?php echo CFS()->get('thu4'); ?></div></li>
                            </ul>
                            <ul>
                                <li class="top-line">FRIDAY<span><br>金曜日</span></li>
                                <li><div><?php echo CFS()->get('fri1'); ?></div></li>
                                <li><div><?php echo CFS()->get('fri2'); ?></div></li>
                                <li><div><?php echo CFS()->get('fri3'); ?></div></li>
                                <li><div><?php echo CFS()->get('fri4'); ?></div></li>
                            </ul>
                        </div>
                    </article>
                    <article class="p-article">
                        <h3 class="c-title--article">Lesson Fee<span>レッスン料金のご案内</span></h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <table class="p-table--fee">
                            <tr><th colspan="2">入会金 / チケット代</th></tr>
                            <tr>
                                <td>入会金<br></td>
                                <td class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price0'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>チケット代<br></td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price1'); ?></p>
                                    <p><?php echo CFS()->get('note1'); ?></p>
                                </td>
                            </tr>
                        </table>
                        <table class="p-table--fee">
                            <tr><th colspan="2">会員レッスン料（チケット利用）</th></tr>
                            <tr>
                                <td>入門クラス<br>60分</td>
                                <td class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price2'); ?></p>
                                    <p><?php echo CFS()->get('note2'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>オープンクラス<br>90分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price3'); ?></p>
                                    <p><?php echo CFS()->get('note3'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>エクストラクラス<br>30分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price4'); ?></p>
                                    <p><?php echo CFS()->get('note4'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>パ・ド・ドゥクラス<br></td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price5'); ?></p>
                                    <p><?php echo CFS()->get('note5'); ?></p>
                                </td>
                            </tr>
                        </table>
                        <table class="p-table--fee">
                            <tr><th colspan="2">ビジターレッスン料（チケットなし）</th></tr>
                            <tr>
                                <td>バレエ入門クラス<br>60分</td>
                                <td class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price6'); ?></p>
                                    <p><?php echo CFS()->get('note6'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>バレエオープンクラス<br>90分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price7'); ?></p>
                                    <p><?php echo CFS()->get('note7'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>エクストラクラス<br>30分</td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price8'); ?></p>
                                    <p><?php echo CFS()->get('note8'); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>パ・ド・ドゥクラス<br></td>
                                <td  class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price9'); ?></p>
                                    <p><?php echo CFS()->get('note9'); ?></p>
                                </td>
                            </tr>
                        </table>

                        <table class="p-table--fee">
                            <tr><th colspan="2">特別クラス</th></tr>
                            <tr>
                                <td>フェルデンクライス<br></td>
                                <td class="p-table--fee__desc">
                                    <p><?php echo CFS()->get('price10'); ?></p>
                                    <p><?php echo CFS()->get('note10'); ?></p>
                                </td>
                            </tr>
                        </table>
                        
                </section><!-- /.p-main__contents -->
                <?php get_sidebar(); ?>

            </section>

        </main><!-- /.l--main -->
        <?php get_footer(); ?>