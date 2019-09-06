<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/qa.css"  type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
          <!-- ビューポートの設定 -->
          <meta name="viewport" content="width=device-width,initial-scale=1">
            <!-- フォントの設定 -->
    <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet"/>
     <!-- jqueryの設定  -->
     <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- jsファイル読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/img/privacy_page.png" class   = "priv-back">
<img src="<?php echo get_template_directory_uri(); ?>/img/privacy_page_smh.png" class   = "priv-back-smh">

    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>