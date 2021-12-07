<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/reset.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/swiper.min.css">
  <title>American Village</title>
</head>

<body>
  <header>

  <h1 id="logo" alt="American Village">
        <a href="/"><img src="./assets/img/logo/logo.png"></a>
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
        <!--/768px以下で表示-->

    <!--ハンバーガー実装テスト-->
  </header>

  <main>
    <div id="fv_container">
        <div id="fv">
            <div class="swiper-container">
                <div class="swiper-wrapper only_pc">
                    <div class="swiper-slide" style="background-image: url('./assets/img/visual/visual_1_pc.png');">
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/img/visual/visual_2_pc.png');">
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/img/visual/visual_3_pc.png');">
                    </div>
                </div>
            </div>
            <div id="fv_logo">
                <picture>
                    <source media="(min-width: 767px)" srcset="./assets/img/text/visual_text_pc.png">
                    <img src="./assets/img/text/visual_text_sp.png" width="300">
                </picture>
            </div>
        　<div id="catch">進化をし続ける「街」アメリカンビレッジマガジン</div>
    </div>
    
    <div id="container">
      <h2 class="title">Latest Articles</h2>
      <div id="articles">
        <ul>
            <li>
                <a href="" class="article">
                    <p class="pic"><img src="./assets/img/post/post_img_1.png"></p>
                    <p class="date">2018/5/20</p>
                    <p class="text">おしゃれカフェがありますよ</p>
                </a>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>
        
            <li>
                <a href="" class="article">
                    <p class="pic"><img src="./assets/img/post/post_img_2.png"></p>
                    <p class="date">2018/5/19</p>
                    <p class="text">あのネオンはいつ交換するのか！？<br>観覧車の謎に迫る！</p>
                </a>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <a href="" class="article">
                    <p class="pic"><img src="./assets/img/post/post_img_3.png"></p>
                    <p class="date">2018/5/18</p>
                    <p class="text">ラソナの社内はこんなのよ</p>
                </a>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <a href="" class="article">
                    <p class="pic"><img src="./assets/img/post/post_img_4.png"></p>
                    <p class="date">2018/5/17</p>
                    <p class="text">お隣のアラハはハワイ？</p>
                </a>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <a href="" class="article">
                    <p class="pic"><img src="./assets/img/post/post_img_5.png"></p>
                    <p class="date">2018/5/16</p>
                    <p class="text">なぜてんと？ラソナの人に聞いてみた</p>
                </a>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>

            <li>
                <a href="" class="article">
                    <p class="pic"><img src="./assets/img/post/post_img_6.png"></p>
                    <p class="date">2018/5/15</p>
                    <p class="text">ベイエリアおしゃれすぎる空間</p>
                </a>
                <p class="readmore"><a href="#">READ MORE</a></p>
            </li>
        </ul>
        </div>
    </div>
  </main>
  
  <footer>
    <p>Copyright © Shimobaru.All RIGHT RESERVED.</p>
  </footer>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./assets/js/swiper.min.js"></script>
<script src="./assets/js/script.js"></script>
</body>
</html>