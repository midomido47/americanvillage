<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
  <title>American Village</title>
  <?php wp_head();?>
</head>

<body>
  <header>

        <h1 id="logo" alt="American Village">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png"></a>
        </h1>
  　　  <!--ハンバーガー実装テスト-->
        <nav class="gnavi__pc-style">
            <ul>
                <li><a href="#">Menu01</a></li>
                <li><a href="#">Menu02</a></li>
                <li><a href="#">Menu03</a></li>
                <li><a href="#">Menu04</a></li>
            </ul>
        </nav>

        
        <!--768px以下で表示-->
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="gnavi__sp-style">
            <ul>
                <li><a href="#">Menu01</a></li>
                <li><a href="#">Menu02</a></li>
                <li><a href="#">Menu03</a></li>
                <li><a href="#">Menu04</a></li>
            </ul>
        </nav>
        <?php/* wp_nav_menu();*/?>
        

  </header>
