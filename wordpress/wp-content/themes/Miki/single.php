<!DOCTYPE html>
<html <?php language_attributes(); ?> lang= "en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <!-- css読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" type="text/css" media="screen" /> 
        <link rel="icon" type="image/x-icon" href="#" />
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- フォントの設定 -->
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <!-- ビューポートの設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <div id="wrapper">
  <?php get_header(); ?>
  <section id="triangle"></section>
 <div class = "contents-wrapper">
 <?php get_sidebar(); ?>
 <ul class="posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li class="post2">
            <h3 class = "post-title12"><?php the_title(); ?></h3>
            <!-- タグ表示 -->
            <p class = "tag-text"><?php the_tags('<span class="ptags">','</span><span class="ptags">','</span>'); ?></p>
            <p class="post_time"><?php the_time('F jS, Y'); ?></p>
            <div class = "eye-catch1">
            <?php $thumb = get_the_post_thumbnail( $post_id, 'post-thumbnails' );
            echo $thumb;
            ?>
            </div>          
              <?php the_content(); ?>
          </li>
        <?php endwhile; else : ?>
          <p><?php _e( '投稿はありません。' ); ?></p>
        <?php endif; ?>
      </ul>
 </div>
<div>
    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>