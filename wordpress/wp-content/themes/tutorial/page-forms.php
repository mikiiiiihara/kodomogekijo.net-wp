<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?> | 新宿子ども劇場</title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/qa.css"  type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
          <!-- ビューポートの設定 -->
          <meta name="viewport" content="width=device-width,initial-scale=1">
            <!-- フォントの設定 -->
    <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet"/>
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <?php get_header(); ?>
<div class = "join-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/img/fbackground1.png" class = "fbackground1">
<img src="<?php echo get_template_directory_uri(); ?>/img/fbackground2.png" class = "fbackground2">

<a href = "https://kodomogekijo.net/wp/appreciation" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/join-btn1.png" class = "join-btn1"></a>
<a href = "https://kodomogekijo.net/wp/otherevent" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/join-btn2.png" class = "join-btn2"></a>
</div>
<?php get_footer(); ?>
    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>