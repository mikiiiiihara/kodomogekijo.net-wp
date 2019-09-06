<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title>トップページ | 新宿子ども劇場</title> 
        
        <!-- SEO -->
        <meta name="Keywords" content="新宿子ども劇場,こども, 子ども, 劇場, 新宿, イベント" />
　      <meta name="Description" content="新宿子ども劇場の公式ホームページ" />

        <!-- css読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/menubar.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" type="text/css" media="screen" /> 
        <!-- フォントの設定 -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet"/>
        <!-- ビューポートの設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <!-- jqueryの設定  -->
        <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- jsファイル読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>

        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <p id="pageTop"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/top-btn.png" alt="トップ画面へ飛ぶボタン" style="width:90px;"></a></p>
  <div id="wrapper">

        <div id="top_wrapper">

        <!-- menubar -->
            <div class = "menubar">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-pic2.png" class = "toppic2">
            <div class = "menu-navi">
            <div class = "navi-left">
            <a href = " https://kodomogekijo.net/wp/フロントページ/過去の活動/"><div class = "nl-content1 nlc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon1.png" class = "m-icon">
            <p class = "m-title">過去の活動</p>
            <p class = "m-sub">LAST ACTIVITY</p>
            </div></a>
            <a href = " https://kodomogekijo.net/wp/event/"><div class = "nl-content2 nlc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon2.png" class = "m-icon">
            <p class = "m-title">これからの活動</p>
            <p class = "m-sub">NEXT ACTIVITY</p>
            </div></a>
            </div>

            <div class = "navi-right">
            <a href = " https://kodomogekijo.net/wp/entry/"><div class = "nl-content3 nlcr">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon3.png" class = "m-icon">
            <p class = "m-title m-bam">入会について</p>
            <p class = "m-sub m-bam">BECOME A MEMBER</p>
            </div></a>

            <a href = " https://kodomogekijo.net/wp/qna/"><div class = "nl-content4 nlcr">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon4.png" class = "m-icon">
            <p class = "m-title m-bam">Q&A</p>
            <p class = "m-sub m-bam">QUESTION</p>
            </div></a>

            <a href = " https://kodomogekijo.net/wp/contact/"><div class = "nl-content5 nlcr">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon5.png" class = "m-icon">
            <p class = "m-title m-bam">お問い合わせ</p>
            <p class = "m-sub m-bam">ACCESS</p>
            </div></a>
            </div>

            </div>
       </div>    <!-- end of menubar -->

              <!-- スライドショー -->
<div class="slider slideshow">
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/top_photo1.png" class = "SlidePhoto"></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/top_photo2.jpg" class = "SlidePhoto"></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/top_photo4.jpg" class = "SlidePhoto"></div>
</div>
       <img src="<?php echo get_template_directory_uri(); ?>/img/top-img.png" class = "toppic1">
       <img src="<?php echo get_template_directory_uri(); ?>/img/toppic343.png" class = "toppic343">
       <div class = "main-copy">
       <h3>子どもたちに、<br>とびきりの笑顔を。</h3>
</div>
<!-- スマホ版コンテンツ（メニューバーの代わり） -->
<div class = "smh-menucontent">
<div class = "above-content">
<a href = " https://kodomogekijo.net/wp/フロントページ/過去の活動/"><div class = "nlc5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon1.png" class = "m-icon6">
            <p class = "m-title6">過去の活動</p>
            <p class = "m-sub6">LAST ACTIVITY</p>
            </div></a>
            <a href = " https://kodomogekijo.net/wp/event/"><div class = "nlc5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon2.png" class = "m-icon6">
            <p class = "m-title6">これからの活動</p>
            <p class = "m-sub6">NEXT ACTIVITY</p>
            </div></a>
            <a href = " https://kodomogekijo.net/wp/entry/"><div class = "nlc5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon3.png" class = "m-icon6">
            <p class = "m-title6 m-bam6">入会について</p>
            <p class = "m-sub6 m-bam6">BECOME A MEMBER</p>
            </div></a>
</div>

            <div class = "below-content">
            <a href = "https://kodomogekijo.net/wp/qna/"><div class = "nlcr5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon4.png" class = "m-icon6">
            <p class = "m-title6 m-bam6">Q&A</p>
            <p class = "m-sub6 m-bam6">QUESTION</p>
            </div></a>
            <a href = " https://kodomogekijo.net/wp/contact/"><div class = "nlcr5 n-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon5.png" class = "m-icon6">
            <p class = "m-title6 m-bam6">お問い合わせ</p>
            <p class = "m-sub6 m-bam6">ACCESS</p>
            </div></a>
</div>

            </div>

     </div><!-- スマホオンリーコンテンツ終わり -->


    <a href="https://kodomogekijo.net/wp/forms"><div class = "top-btn limg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-btn.png" class = "cbtn">
    <h2 class = "lfont">活動の予約はこちら</h2>
    </div></a>
    <a href="https://kodomogekijo.net/wp/join/" target="_blank"><div class = "top-btn rimg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-btn.png" class = "cbtn">
    <h2 class = "rfont">入会申し込みはこちら</h2>
    </div></a>

       <!-- 装飾 -->
       <img src="<?php echo get_template_directory_uri(); ?>/img/cld-cloud1.png" class = "cldc1">
       <img src="<?php echo get_template_directory_uri(); ?>/img/cld-cloud2.png" class = "cldc2">
        </div>


        <section id = "news-wrapper">
            <div class = "n-container">
         <div class = "n-container1">
         <div class = "kng-container">
         <img src="<?php echo get_template_directory_uri(); ?>/img/kng_icon.png" class = "kng_icon">
         <div class = "kng-container1">

         <ul class = "an-posts">
<?php
    $wp_query = new WP_Query();
    $param = array(
        'posts_per_page' => 2, //表示件数。-1なら全件表示
        'post_type' => 'event', //カスタム投稿タイプの名称を入れる
        'taxonomy' => 'tags',
        'term' => '#イチオシ' //イチオシタグのついた投稿を表示
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
?>
<li>
<div class = "pre-an"><?php $thumb = get_the_post_thumbnail( $post_id, 'large' );
       echo $thumb;?></div>
       <div class = "an-details">
    <a href="https://kodomogekijo.net/wp/tags/%E3%82%A4%E3%83%81%E3%82%AA%E3%82%B7/"><p class = "antitle"><?php the_title(); ?></p></a>
    <p class = "andate"><?php echo get_post_meta(get_the_ID(),"date",true); ?></p>
    <div class = "thdt3">
    <p class = "anplace"><?php echo get_post_meta(get_the_ID(),"place",true); ?></p>
    <p class = "antime"><?php echo get_post_meta(get_the_ID(),"time",true); ?></p>
    <p class = "anprice"><?php echo get_post_meta(get_the_ID(),"price",true); ?></p>
</div>
      </div>

</li>
<?php endwhile; endif; ?>
</ul>
         <a href=" https://kodomogekijo.net/wp/event/" class="btn1 detail-entry1">
        <div class = "d-btn">
        その他これからの活動はこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon1">
        </div>
        </a>
         </div>
         </div>
         </div>
         <div class = "n-container2">
             <div class = "fb-contents">
              <div class="fb-container">
              <img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon1.png" class = "fb-icon1">
              <div class="fb-page" data-href="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/" data-tabs="timeline" data-width="500" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/">Shinjuku Kodomogekijo</a></blockquote></div>
              </div>
             </div>
         </div>
</div>
        </section>


        <section id="about-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/img/back_about.png" class = "bk-about">
            <div id="about" class="container">
                <div class="about-content">
                    <h1>新宿子ども劇場とは</h1>

        <img src="<?php echo get_template_directory_uri(); ?>/img/toppic544.png" class = "toppic544">
                
                    <h2>すべての子どもたちに文化体験を</h2>
                    <p>新宿子ども劇場は1975年に新宿の地に誕生し、<br>
                    2005年にはNPO法人になり活動の幅も広がりました。<br>
                    私たちは、文化ゆたかな環境で育まれる感性が、<br>
                    子どもたちの生きる力につながると考えています。<br>
                    </p>
                </div>

            </div>
        </section>

        <section id="activity-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-back-upper.png" class="bupp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/green-c.png" class="gr-c">
        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-back-lower.png" class="acbl">


            <div class="container" id="activity-wrapper-inner">
                <h1 class="heading">活動について</h1>
            
            
            <div id="activities">
            <img src="<?php echo get_template_directory_uri(); ?>/img/rocket.png" class ="acrkt">
                <div class="activity">
                <img src="<?php echo get_template_directory_uri(); ?>/img/or-cloud1.png" class="orcl1">  
                    <div class="activity-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-icon1.png" alt="">
                        <p class="activity-icon-txt1">みる<br>あらわす</p>
                    </div>
                    <h2 class = "left-sidef">ライブの体験を定期的に</h2>
                    <p class="activity-txt">演劇をみたり
                       コンサートをきいたり、
                       自分のことばやからだで
                       表現する力を育みます。
                    </p>
                </div>
                <div class="activity">  
                <img src="<?php echo get_template_directory_uri(); ?>/img/or-saturn.png" class="ors1">  
                <div class="activity-icon right-sided pcshowed">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-icon2.png" alt="">
                        <p class="activity-icon-txt1">あそぶ<br>つどう</p>
                    </div>
                    <div class = "act-content1">
                    <h2 class = "right-sidef">赤ちゃんから孫のいる世代まで、異年齢で多彩な活動</h2>
                    <p class="activity-txt4">
                    子どもを真ん中に一緒に生活を楽しみます。（キャンプ、わらべうた、季節のあそびなど）
                    </p>
                </div>
                <div class="activity-icon right-sided smhshowed">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-icon2.png" alt="">
                        <p class="activity-icon-txt1">あそぶ<br>つどう</p>
                    </div>

                </div>
                <div class="activity">
                    <div class="activity-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-icon3.png" alt="">
                        <p class="activity-icon-txt2">まなぶ</p>
                    </div>
                    <h2 class = "left-sidef">子どものこと、<br>まわりのこと、色々</h2>
                    <p class="activity-txt">
                    地域や行政などとも連携し、子どもたちを取り巻く今を学びます。
                    </p>
                </div>

            </div>
                <a href=" https://kodomogekijo.net/wp/フロントページ/過去の活動/" class="previous-activity btn"style="text-decoration:none;">過去の活動記録はこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon6"></a>

        </div> 
        <!--container閉じ-->
        </section>


        <div id="at-wrapper-above">
            <h1>入会の魅力</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/img/title-star-right.png" class="stright">
        </div>
        <section id="attraction-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-img.png" class="org-cloud1">
        <img src="<?php echo get_template_directory_uri(); ?>/img/org-smhc.png" class="org-smh1">
            <div id="attraction" class="container">

                <div class="attraction-contents ac-upper">
                    <div class="attraction-content">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-together.png" alt="" class="item-attraction">
                        <span class="remark">子どもと一緒に舞台を観たり、音楽を聞いたり、表現したり、遊んだり・・・ワクワクがいっぱい。</span>
                    </a>
                    </div>
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-meeting.png" alt="" class="item-attraction" id = "itemeet">
                        <span class="remark">赤ちゃんから学生、社会人、孫のいる世代まで。たくさんの人に程よい距離で見守られ、育ちあいます。</span></a>
                    </div>
                </div>
                <div class="attraction-contents ac-under">
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-show.png" alt="" class="item-attraction">
                        <span class="remark1">月会費のみで、様々なジャンルの作品を切れ目なく鑑賞することができます。</span></a>
                    </div>
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-news.png" alt="" class="item-attraction">
                        <span class="remark1">企画段階から関わるので最新の情報を入手でき、各種イベントに優先参加できます。会員の住む様々な地域から発信される情報もキャッチできます。</span></a>
                    </div>
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-thought.png" alt="" class="item-attraction">
                        <span class="remark1">芋ほり、生け花、クラウンメイクなどの体験活動も、会員の声から始まります。「新宿御苑で鬼ごっこ」なんていう大胆企画も実現しました。</span></a>
                    </div>

                </div>
                <a href="https://kodomogekijo.net/wp/entry" class="btn detail-entry">入会について詳しくはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon6"></a>
                <a href="https://kodomogekijo.net/wp/join" target="_blank" class="btn form-entry">入会フォームはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon6"></a>

            </div>

<div class="attraction-smh">
    <div class="container">
      <div class="faq">
        <ul id="faq-list">
          <li class="faq-list-item green">
          <div class = "icon-circle">                        
    <img src="<?php echo get_template_directory_uri(); ?>/img/sitem-together.png" alt="" class="asm-icon"></div>
            <h2 class="question">子どもと一緒</h2>
            <span>+</span>
            <div class="answer">
              <p>子どもと一緒に舞台を観たり、音楽を聞いたり、表現したり、遊んだり・・・ワクワクがいっぱい。</p>
            </div>
          </li>
          <li class="faq-list-item lgreen">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sitem-meeting.png" alt="" class="asm-icon1">
    <div class = "icon-circle"></div>
            <h2 class="question">人との出会い</h2>
            <span>+</span>
            <div class="answer">
              <p>赤ちゃんから学生、社会人、孫のいる世代まで。たくさんの人に程よい距離で見守られ、育ちあいます。</p>
            </div>
          </li>
          <li class="faq-list-item green">
          <div class = "icon-circle">                        
    <img src="<?php echo get_template_directory_uri(); ?>/img/sitem-show.png" alt="" class="asm-icon2"></div>
            <h2 class="question">充実の定期演奏会</h2>
            <span>+</span>
            <div class="answer">
              <p>月会費のみで、様々なジャンルの作品を切れ目なく鑑賞することができます。</p>
            </div>
          </li>
          <li class="faq-list-item lgreen">
          <div class = "icon-circle">                        
    <img src="<?php echo get_template_directory_uri(); ?>/img/sitem-news.png" alt="" class="asm-icon3"></div>
            <h2 class="question">ニュースの共有</h2>
            <span>+</span>
            <div class="answer">
              <p>企画段階から関わるので最新の情報を入手でき、各種イベントに優先参加できます。会員の住む様々な地域から発信される情報もキャッチできます。</p>
            </div>
          </li>
          <li class="faq-list-item green">
          <div class = "icon-circle">                        
    <img src="<?php echo get_template_directory_uri(); ?>/img/sitem-thought.png" alt="" class="asm-icon4"></div>
            <h2 class="question">思いをカタチに</h2>
            <span>+</span>
            <div class="answer">
              <p>芋ほり、生け花、クラウンメイクなどの体験活動も、会員の声から始まります。「新宿御苑で鬼ごっこ」なんていう大胆企画も実現しました。</p>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>

  
<a href="https://kodomogekijo.net/wp/entry" class="btn11 detail-entrys">入会について詳しくはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon6"></a>
                <a href="https://kodomogekijo.net/wp/join" target="_blank" class="btn11 form-entrys">入会フォームはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon6"></a>

        </section>
        <section id="comment-wrapper">
                         <!-- SLアイコン -->
                         <img src="<?php echo get_template_directory_uri(); ?>/img/bkimage1.png" id="SLicon">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/bkimage2.png" class="SLicon2">

                         <!-- 背景アイコン -->
                         <img src="<?php echo get_template_directory_uri(); ?>/img/comment-icon1.png" class="cmicon1">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/comment-icon2.png" class="cmicon2">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/comment-icon3.png" class="cmicon3">

            <div id="comment" class="container">
                <h1 class = "sizuru-intro">コメント</h1>
                <div class="sizuru-about">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sizuru-back.png" id="szrbk">

                    <div class="comment-inner">
                        <h2>おおたか静流<span>さん</span></h2>
                        <h3>東京都出身。７歳よりクラシックの声楽家に師事。<br>
                            現在、ジャンルや国境を越えた音楽活動を展開している。<br>
                            NHK Eテレのテレビ番組「にほんごであそぼ」にレギュラー出演中。</h3>
                        <p>表現の世界には魔物が住んでいるといいます。<br>
                            とてつもない謎のパワーを発揮するという・・・<br>
                            残念ながら出没予測は無理。<br>
                            でもヒントは有るんです！</p>
                        <p></p>
                        <p>―魔物は優れたステージに現れる―</p>
                        <p></p>
                        <p>この真実を、どうやら<br>
                            「こども劇場」は知ってしまったらしい・・・・</p>
                        <p></p>
                        <p>みなさん、摩訶不思議な魔物に出逢う旅で<br>
                            お逢いしましょう！</p>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </section>

<section class = "smh-fb">
<div class="fb-container" id = "aboutFacebook">
              <img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon1.png" class = "fb-icon1">
              <div class="fb-page" data-href="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/" data-tabs="timeline" data-width="350" data-height="480" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/">Shinjuku Kodomogekijo</a></blockquote></div>
</section>

        <div class = "map-container" id = "accessmap">
                    <!-- 地図 -->
        <div class = "ggmap" id = "access">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0543967975414!2d139.72771331542043!3d35.70027898018983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cf849032557%3A0x710218364dbf4d72!2z44CSMTYyLTA4NTMg5p2x5Lqs6YO95paw5a6_5Yy65YyX5bGx5LyP55S677yS4oiS77yR77yX!5e0!3m2!1sja!2sjp!4v1512442785062" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- 地図詳細 -->
        <div class = "mapdet">
            <p>新宿子ども劇場・事務所<br>
            東京都新宿区北山伏町2-17<br>
            TEL/FAX: 03-5261-8696　(火・水・金・土 10:00-17:00 )</p>
        </div>
       </div>
       <div class = "contact-content">
       <img src="<?php echo get_template_directory_uri(); ?>/img/cc-icon.png" class="ccicon">
        <a href = "https://twitter.com/49kodomogekijo?lang=ja"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" class="tticon cc-btn"></a>
        <a href = "https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/?hc_ref=ARTyhAiQsM1ZtZjwX9Ln_w9iDRTmQFFvf9y1RBQzb2fIiaAFBLkHCNqNybVOtZ7zXmY"><img src="<?php echo get_template_directory_uri(); ?>/img/fbook-icon.png" class="fficon cc-btn"></a>
        <a href="https://kodomogekijo.net/wp/forms"><div class = "top-btn2 limg1 cc-btn">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-btn.png" class = "cbtn">
    <h2 class = "lfont1">参加申込みは<br>コチラ</h2>
    </div></a>
    <a href="https://kodomogekijo.net/wp/join/"target="_blank"><div class = "top-btn2 rimg1 cc-btn">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-btn.png" class = "cbtn">
    <h2 class = "rfont1">入会申込みは<br>コチラ</h2>
    </div></a>
      </div>
                <?php get_footer(); ?>
        </div>
<!-- facebook timeline generate -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html