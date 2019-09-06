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
  <div id="AboutPage">
      <div class = "ab-content">
      <h2>About This Page</h2>
      <p>このページは、井原樹によるdiaryサイトである。<br>「毎日感じたことを日記として書いていくことで自らの知識を高めることができる。」という堀江貴文氏の言葉のもと、<br>日々過ごしていく中で感じたこと、印象に残った写真などを記録していく。</p>
  </div>
  <div class = "ab-content2">
  <h2>profile</h2>
  <img src = "<?php echo get_template_directory_uri(); ?>/img/S__56467461.jpg" class = "profile">
      <p>井原樹<br>1997年8月24日生まれ<br>茨城県取手市出身<br>私立早稲田大学高等学院出身<br>早稲田大学政治経済学部経済学科在学中<br>趣味は野球観戦・筋トレ・映画鑑賞</p>
  </div>
  <div class="clear"></div>
</div>
<div id="Photo">
<img src = "<?php echo get_template_directory_uri(); ?>/img/menu_photo.png" class = "menu_photo">
<h2>Photo</h2>
<a href="#"><div class="photo-catch"><img src = "<?php echo get_template_directory_uri(); ?>/img/gallery.jpg" class = "gallery"><p class = "g-font"><span>galleryへ</span><br>印象に残った、思い出の写真を投稿。</p></div></a>
</div>
<div id="Diary">
<img src = "<?php echo get_template_directory_uri(); ?>/img/menu_photo2.png" class = "menu_photo">
<h2>Diary</h2>
<div class="news">
<p>最新の記事一覧</p>
<div id="post-lists2">
<?php $paged = get_query_var('paged'); ?>
<?php query_posts("posts_per_page=8&paged=$paged"); ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>" class = "post-title1"><h3><?php the_title(); ?></h3></a>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</div>
</div>
<section id="sky-square"></section>

</div>

<div>
    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>