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

        <?php
            if(have_posts()):
            while(have_posts()):
            the_post(); ?>

            <ul>
                <li>
                    <p class="pic"><img src="<?php echo get_template_directory_uri(); ?>"></p>
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <p class="text"><?php the_title(); ?></p>
                    <p class="readmore"><a href="#">READ MORE</a></p>
                </li>
            </ul>

            <?php endwhile;
            else : ?>
            <p>表示する記事がありません</p>
        <?php endif;?>



        </div>
    </div>
  </main>

  <?php get_footer(); ?>