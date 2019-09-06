<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title>これからの活動 | 新宿子ども劇場</title> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/pre.css"  type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <!-- ビューポートの設定 -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- フォントの設定 -->
    <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet"/>
     <!-- jqueryの設定  -->
     <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
      
  <?php get_header(); ?>
      
  <div class = "top-wrapper1">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic1.png" class = "pic111">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/pic111s.png" class = "pic111s">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic2.png" class = "pic222">
                    <h2 class = "prev-theme1">これからの活動</h2>
                    </div>

            <div class = "wp-content1">
<div class = "btn-zone">
<img src = "<?php echo get_template_directory_uri(); ?>/image/pplane.png" class = "absl pplane">
            <a href = "https://kodomogekijo.net/wp/tags/%E9%91%91%E8%B3%9E%E4%BC%9A/">
                <div class = "icon14 cc-btn">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic3.png" class = "pic333">
                    <h2 class = "icon-sentence">鑑賞会をみる</h2>
                </div></a>
                <a href = "https://kodomogekijo.net/wp/tags/%E3%81%9D%E3%81%AE%E4%BB%96/">
                 <div class = "icon24 cc-btn">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic4.png" class = "pic444">
                    <h2 class = "icon-sentence">その他のイベントをみる</h2>
                    </div></a>
</div>
  <div class = "pre-posts">
  <div class = "pre-contents">
      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- ループ開始 -->
  <div class = "pre-post">

  <div class = "e-month">
  <img src = "<?php echo get_template_directory_uri(); ?>/image/pre-SLicon.png" class = "pSL">
  <h2 class = "pmonth"><?php echo get_post_meta(get_the_ID(),"month",true); ?>月</h2>
  </div>  <!-- the end of e-month -->
  <div class = "eyecatch">
                    <div class = "picture">
                            <?php 
if(has_term( '#鑑賞会','tags' )== true){
  ?>
<img src = "<?php echo get_template_directory_uri(); ?>/images/sp-icon.png" class = "sp-icon333">
<?php
}else{
?>
  <img src = "<?php echo get_template_directory_uri(); ?>/images/sp-icon2.png" class = "sp-icon333">
<?php
}
?>

  <div class = "y-border">
  
  <?php if ( has_post_thumbnail() ) : ?>
  <a href="<?php
  $popupimg_id = get_post_thumbnail_id();
  $popupimg_url = wp_get_attachment_image_src($popupimg_id,'large', true);
  echo esc_url($popupimg_url[0]); 
  ?>"><?php the_post_thumbnail($post_id, 'large'); ?></a>
<?php endif; ?>
</div></div>
                    
                    <!-- PC版条件分岐「申し込みボタン-->
                    <?php
$custom_fields2 = get_post_meta( $post->ID , 'application' , true );
if($custom_fields2 == "申込受付中"){ ?>
    <a href = "https://kodomogekijo.net/wp/forms">
    <div class = "resev-btn cc-btn">
        <p>申込受付中</p>
    </div>
</a>
    <?php }elseif($custom_fields2 == "ハガキのみでの応募"){ ?>
    <div class = "resev-btn22">
        <p>ハガキのみでの応募</p>
    </div>
<?php }else{ ?>     
<div class = "resev-btn22">
        <p>応募締め切りました</p>
    </div>
<?php }?>
                 </div>   
                 <div class = "p-content22">
                 <h2><?php the_title(); ?></h2>
                 <div class = "date-box">
                     <p class ="date"><?php echo get_post_meta(get_the_ID(),"date",true); ?></p>
                     <div class = "day"><p><?php echo get_post_meta(get_the_ID(),"day",true); ?></p></div>
                 </div>
                 <p class = "place fnt1"><?php echo get_post_meta(get_the_ID(),"place",true); ?></p>
                 <p class = "time fnt1"><?php echo get_post_meta(get_the_ID(),"time",true); ?></p>
                 <p class = "price fnt1"><?php echo get_post_meta(get_the_ID(),"price",true); ?></p>
                 <p class = "other fnt1"><?php echo get_post_meta(get_the_ID(),"other",true); ?></p>
                 <p class = "p-text fnt2"><?php the_content(); ?><span id = "tags-inst">タグ：</span><?php the_terms($post->ID,'tags'); ?></p>

                    <!-- スマホ版条件分岐「申し込みボタン」 -->
                                     <?php
$custom_fields12 = get_post_meta( $post->ID , 'application' , true );
if($custom_fields12 == "申込受付中"){ ?>
    <a href = "https://kodomogekijo.net/wp/forms">
    <div class = "resev-btn112 cc-btn">
        <p>申込受付中</p>
    </div>
</a>
<?php }elseif($custom_fields12 == "申し込み受付中"){ ?>
    <a href = "https://kodomogekijo.net/wp/forms">
    <div class = "resev-btn112 cc-btn">
        <p>申し込み受付中</p>
    </div>
</a>
<?php }elseif($custom_fields12 == "お申し込み受付中"){ ?>
    <a href = "https://kodomogekijo.net/wp/forms">
    <div class = "resev-btn112 cc-btn">
        <p>お申し込み受付中</p>
    </div>
</a>
<?php }elseif($custom_fields12 == "ハガキのみでの応募"){ ?>
    <div class = "resev-btn2222">
        <p>ハガキのみでの応募</p>
    </div>
<?php }else{ ?>     
<div class = "resev-btn2222">
        <p>応募締め切りました</p>
    </div>
<?php }?>
                    </div><!-- end of p-content -->  
</div><!--pre-post終わり-->

<?php endwhile; endif; ?>

</div>


      <!-- ぺージネーション -->
      <div class = "pp-menu">
      <?php
if (function_exists("pagination")) {
	pagination($additional_loop->max_num_pages);
}
?>
</div>

</div>
<?php get_footer(); ?>
    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>