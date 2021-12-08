<?php
  // ページのメニューを管理画面で操作できるために機能
 add_theme_support('menus');
  //　投稿ページにサムネイルを追加する方法
  add_theme_support('post-thumbnails');
  // 投稿ページのアーカイブページを作成する
  function post_has_archive($args,$post_type){
    if('post'== $post_type){
       $args['rewrite'] = true;
       $args['has_archive'] = 'blog';
    }
    return $args;
  }
  add_filter('register_post_type_args','post_has_archive',10,2);

?>