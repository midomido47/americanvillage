
    
    $(function() {
        $('.menu-btn').on('click',function() {
            console.log('test');
            $(this).toggleClass('active');
    
            if ($(this).hasClass('active')) {
                $('.gnavi__sp-style').addClass('active');
            } else {
                $('.gnavi__sp-style').removeClass('active');
            }
        });
    });

    // $(function () {
    //     var elem = document.querySelector(".swiper-container");
    //     if (elem !== null) { //swiper-containerがあれば…
    //     var mySwiper = new Swiper(".swiper-container", {
    //       loop: true, //ループさせる
    //       effect: "fade", //フェードのエフェクト
    //       autoplay: {
    //         delay: 3000, //４秒後に次の画像へ
    //         disableOnInteraction: false //ユーザー操作後に自動再生を再開する
    //       },
    //       speed: 2000, //２秒かけながら次の画像へ移動
    //       allowTouchMove: false, //マウスでのスワイプを禁止
    //       navigation: { //左右のページ送りを有効にする
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev"
    //       },
    //       pagination: { //円形のページネーションを有効にする
    //         el: ".swiper-pagination",
    //         clickable: true //クリックを有効にする
    //       }
    //     });
    //   }
    //   })();


    /*
    window.onload = function() {
        var mySwiper = new Swiper ('.swiper-container', {
            slidesPerView:1,//画像を何枚表示するか
            spaceBetween: 0,//何ピクセル画像の間隔をあけるか
            centeredSlides : true,//見切らせたい場合メイン画像をセンターにもってくるか
            //自動再生する場合
            autoplay: {
            delay: 3000, //3秒後に次の画像に代わる
            },
            loop: true,//最後の画像までいったらループする
        });
    }

    var swiper = new Swiper('.swiper-container');
    */
