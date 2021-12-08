<?php
  // ページのメニューを管理画面で操作できるために機能
<<<<<<< HEAD
 add_theme_support('menus');
  //　投稿ページにサムネイルを追加する方法
  add_theme_support('post-thumbnails');
  // 投稿ページのアーカイブページを作成する
  function post_has_archive($args,$post_type){
    if('post'== $post_type){
       $args['rewrite'] = true;
       $args['has_archive'] = 'blog';
=======
  add_theme_support('menus');
  // 投稿ページにサムネイルを追加する方法
  add_theme_support('post-thumbnails');
  // 投稿のアーカイブページを作成する
  function post_has_archive($args,$post_type){
    if ('post' == $post_type) {
      $args['rewrite'] = true; //リライトを有効にする
      $args['has_archive'] = 'archive'; //任意のスラッグ名
>>>>>>> e6fe70e5da3881e1d9b44ffdea77e5fbd745f6ed
    }
    return $args;
  }
  add_filter('register_post_type_args','post_has_archive',10,2);

?>