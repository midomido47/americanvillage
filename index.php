<?php get_header(); ?>

  <main>
    <div id="fv_container">
        <div id="fv">
            <div class="swiper-container">

                <div class="slider1">

                    <div class="only_pc">
                        <?php echo do_shortcode('[smartslider3 slider="1"]');?>
                    </div>
                    <div class="only_sp">
                        <?php echo do_shortcode('[smartslider3 slider="2"]');?>
                    </div>
                    
                </div>
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
        <?php
            if(have_posts()):
            while(have_posts()):
            the_post(); ?>
                <li>
                    <p class="pic"><?php the_post_thumbnail(); ?></p>
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <p class="text"><?php the_title(); ?></p>
                    <p class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
                </li>
            <?php endwhile;
            else : ?>
            <p>表示する記事がありません</p>
        <?php endif;?>
        </ul>


        </div>
    </div>
  </main>

  <?php get_footer(); ?>