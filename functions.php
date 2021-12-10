<?php



  // ページのメニューを管理画面で操作できるために機能

  add_theme_support('menus');
  // 投稿ページにサムネイルを追加する方法
  add_theme_support('post-thumbnails');
  // 投稿のアーカイブページを作成する
  function post_has_archive($args,$post_type){
    if ('post' == $post_type) {
      $args['rewrite'] = true; //リライトを有効にする
      $args['has_archive'] = 'archive'; //任意のスラッグ名
    }
    return $args;
  }
  add_filter('register_post_type_args','post_has_archive',10,2);


  //   //PCでのみ表示するスライドショー
  // function if_is_pc($atts, $content = null )
  // {
  // $content = do_shortcode( $content);
  //     if(!is_mobile())
  //         {
  //         return $content;
  //         }
  // }
  // add_shortcode('pc', 'if_is_pc');
  // //スマートフォンでのみ表示するスライドショー
  // function if_is_mo($atts, $content = null )
  // {
  // $content = do_shortcode( $content);
  //     if(is_mobile())
  //         {
  //         return $content;
  //         }
  // }
  // add_shortcode('mo', 'if_is_mo');
?>

