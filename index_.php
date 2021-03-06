<?php get_header(); ?>


  <main>
    <div id="fv_container">
        <div id="fv">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <!--後でonly_pcとonly_sp追加-->
                    <div class="swiper-slide only_pc" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/visual/visual_1_pc.png');">
                        </div>
                        <div class="swiper-slide only_sp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/visual/visual_1_sp.png');">
                        </div>
                        <div class="swiper-slide only_pc" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/visual/visual_2_pc.png');">
                        </div>
                        <div class="swiper-slide only_sp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/visual/visual_2_sp.png');">
                        </div>
                        <div class="swiper-slide only_pc" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/visual/visual_3_pc.png');">
                        </div>
                        <div class="swiper-slide only_sp" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/visual/visual_3_sp.png');">
                        </div>
                    </div>
                <!--後でonly_pcとonly_sp追加-->
            </div>
            <div id="fv_logo">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/text/visual_text_pc.png">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/text/visual_text_sp.png" >
                </picture>
            </div>
        　<div id="catch">進化をし続ける「街」アメリカンビレッジマガジン</div>
    </div>
    
    <div id="container">
      <h2 class="title">Latest Articles</h2>
      <div id="articles">
        <ul>
            <li>
                <p class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_img_1.png"></p>
                <p class="date">2018/5/20</p>
                <p class="text">おしゃれカフェがありますよ</p>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>
        
            <li>
                <p class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_img_2.png"></p>
                <p class="date">2018/5/19</p>
                <p class="text">あのネオンはいつ交換するのか！？<br>観覧車の謎に迫る！</p>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <p class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_img_3.png"></p>
                <p class="date">2018/5/18</p>
                <p class="text">ラソナの社内はこんなのよ</p>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <p class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_img_4.png"></p>
                <p class="date">2018/5/17</p>
                <p class="text">お隣のアラハはハワイ？</p>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <p class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_img_5.png"></p>
                <p class="date">2018/5/16</p>
                <p class="text">なぜてんと？ラソナの人に聞いてみた</p>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <p class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_img_6.png"></p>
                <p class="date">2018/5/15</p>
                <p class="text">ベイエリアおしゃれすぎる空間</p>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>
        </ul>
        </div>
    </div>
  </main>

  <?php get_footer(); ?>