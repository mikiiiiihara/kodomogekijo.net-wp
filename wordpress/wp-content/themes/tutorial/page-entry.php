<!-- 一般ページ用 -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?> | 新宿子ども劇場</title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <!-- css読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/entry.css" type="text/css" media="screen" /> 
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <!-- ビューポートの設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <!-- jqueryの設定  -->
        <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- jsファイル読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/entry.js"></script>

        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <?php get_header(); ?>
  <div class="background">
               <div class="wrapper1">
                    <div class="page1">                   
                        <h1 class="entry">入会について</h1>
                    </div>  
                </div>
        

                <div class="wrapper2" id="kaihi">
                    <div class="page2">
                        
                        <div class="sentence1">
                            <p>会員になると、年会費、月会費などを納めます。</p>
                            <p>所属するサークルを通じて、月ごとまたは<br>一定期間まとめて前納します。</p>
                            <p>3才未満は無料です。</p>
                        </div>
                        <div class="board">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/board.png">
                            <div class="sentence2">
                                    <p>入会金　500円<br>月会費　1500円　（初回は2ヶ月分まとめていただきます）<br>年会費　（1世帯）500円</p>
                            </div>  
                        </div>
                        <div class="btn one">
                            <a href="https://kodomogekijo.net/wp/join/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/btn.png"></a> 
                        </div>
                    </div>   
                </div>

                <div class="wrapper3" id="everyone">
                    <div class="page3">
                        <div class="sentence3">
                            <p>定期鑑賞会や様々な活動は、<br>会員の「みたい」「やってみたい」を中心に</p>
                            <p>企画・運営しているため、顔を合わせる場を多くつくっています。</p>
                        </div>
                        <div class="sentence4">
                            <p>幅広い年代で構成される会員コミュニティのサポートがあるので、<br>無理なく、自分のペースで関わることができます。</p>
                        </div>
                        <div class="btn two"> 
                             <a href="https://kodomogekijo.net/wp/join/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/btn.png"></span></a>
                        </div>
                    </div>
                </div>

                <div class="wrapper4" id="voice">
                    <div class="page4">
                        <div class="members">
                                <div class="member1">
                                    <div class="photos photo1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/T.png" width="90%">
                                    </div>
                                    <div class="coments1 coment1">
                                        <div class="name1">高校生Tくん<br>
                                        <span class = "shorter11">小さい頃は鑑賞会やキャンプに行って楽しかったけど、高学年以降は部活が忙しくなり活動に参加できなくなりました。久しぶりにみんなに会う時は少し心配したけど、普通に話せてびっくり。いつでも、どんな自分でも受け入れてくれる場所があるっていいな、と思いました。<span class = "shorter11"></div>
                                        
                                    </div>
                                </div>
                                    <div class="photos photo2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/M.png" width="90%">
                                    </div>
                                    <div class="coments1 coment2">
                                        <div class="name2">大学生Mさん<br>
                                        <span class = "shorter11">対大人、対同年齢だけではなく、小さい子供とも関わりを持て、一緒にいろいろな活動が出来ることに魅力を感じました。</span>
                                        </div>
                                    </div>
                                    <div class="photos photo3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Y.png" width="90%">
                                    </div>
                                    <div class="coments1 coment3">
                                        <div class="name3">娘を持つYさん<br>
                                        <span class = "shorter11">いつも楽しく遊んでくれる青年たちを子どもたちは大好き。親としても、難しくなる思春期に寄り添ってくれる頼もしい存在です。</span>
                                        </div>
                
                                    </div>
                                <div class="member4">
                                    <div class="photos photo4">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/K.png" width="90%">
                                    </div>
                                    <div class="coments2 coment4">
                                        <div class="name4">孫を持つKさん<br>
                                        <span class = "shorter11"> 親子で入会し、約30年になります。子どもたちは巣立ちましたが、仲間とは心地良い関係が続いています。赤ちゃんや若いパパやママとの触れ合いはとても楽しく元気をもらえるので、できるところで細々と活動を支えています。</span>
                                        </div>
                                       
                                    </div>
                                </div>
                                    <div class="photos photo5">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/fatherO.png" width="90%">
                                    </div>
                                    <div class="coments2 coment5">
                                        <div class="name5">二児の父Oさん<br>
                                        <span class = "shorter11"> 普段は仕事で時間が取れない分、イベントに一緒に参加して親子の時間を作っています。大人が楽しめる企画もあるので、つい手を挙げてしまい・・・親である私自身が楽しんでいるかもしれません。</span>

                                        </div>
                                      
                                    </div>
                                    <div class="photos photo6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/O.png" width="90%">
                                    </div>
                                    <div class="coments2 coment6">
                                        <div class="name6">小学生の子どもを持つOさん<br>
                                        <span class = "shorter11"> 会員ママに誘われて入会。一緒に育つお友だちや見守ってくれる大人たちがいて、ひとりっ子にはありがたいコミュニティーです。私が育った下町に似ているかも。今はおんぶに抱っこですが、仕事や子育ての余裕ができたら企画・運営にも携わってみたいです。</span>

                                        </div>
                                      
                                    </div>
                        </div>
        
                        <div class="btn three">
                                <a href="https://kodomogekijo.net/wp/join/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/btn.png"></span></a>
                        </div>
                    </div>  
                </div>     

             </div>
             <?php get_footer(); ?>
    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>