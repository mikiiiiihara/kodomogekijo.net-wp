<!-- フォーム用 -->

<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="https://www.w3.org/1999/xhtml" xml:lang="ja">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8"><!-- フォーム連携用 -->
        <title><?php wp_title(); ?> | 新宿子ども劇場</title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <!-- css読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact.css" type="text/css" media="screen" /> 
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <!-- ビューポートの設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <!-- jqueryの設定  -->
        <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <!-- jsファイル読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>

        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>

<script>
  function validateForm(){
   if(document.getElementById("familyname").value=="" || document.getElementById("chkbox3").checked==false || document.getElementById("familuname_kana").value==""|| document.getElementById("firstname").value==""|| document.getElementById("firstname_kana").value==""|| document.getElementById("mail").value==""){
    alert("記入漏れがあります。");
    return false;
   }else{
    document.getElementById("formID").submit();
    document.getElementById("thankyou").style.display="";
    document.getElementById("thankyou").innerHTML="<center><h2>お問い合わせありがとうございました</h2><p>入力頂いたメールアドレスに、確認メール（自動返信メール）を送信させて頂いております。</p><p>送信内容を確認の上、担当者より折り返し連絡を差し上げますので、少々お待ちください。</p><p>今後ともどうぞよろしくお願いいたします。</p></center>";
    document.getElementById("thanks_none").style.display="none";
    return true;
   }
  }
 </script>
 
  <body>
  <?php get_header(); ?>
<div class = "contact-wrapper1">
  <div style="display:none;" id="thankyou">
  <div class = "blan_blank"></div>
  </div>
  <iframe src="#" id="fake-target" name="fake-target" style="width:0px; height:0px; border:0px;"></iframe>
  
  <div id="thanks_none">
  <h1 class = "ffinquiry">お問い合わせ</h1>

    <div id="contain">
   <form id="formID" action="https://script.google.com/macros/s/AKfycbxxQ63c537_25xe4BtFeioh-sYkzVlgBw3HuSqxFZ-g60zu9Rjk/exec" method="post" target="fake-target">
    
    <div id="form-name" class="form-box">
    <p><span class = "kome-org">※</span>お名前</p>
                    <div id="sei_kanji">
                        <label for="familyname">姓</label>
                        <input id="familyname" name="familyname_kanji" type="text" placeholder="劇場" style="ime-mode:active"/><br />
                    </div>
                    
                    <div id="sei_kana">
                        <label for="familuname_kana">セイ</label>
                        <input id="familuname_kana" type="text" name="familyname_kana" value="" placeholder="ゲキジョウ" style="ime-mode:active">
                    </div>

                    <div id="na_kanji">
                        <label for="firstname">名</label>
                        <input id="firstname" type="text" name="firstname_kanji" value="" placeholder="太郎" style="ime-mode:active">
                    </div>

                    <div id="na_kana">
                        <label for="firstname">メイ</label>
                        <input id="firstname_kana" type="text" name="firstname_kana" value="" placeholder="タロウ" style="ime-mode:active">
                    </div>
                </div>

                <div id="form-contact" class="form-box mailbox">
                    <p><span class = "kome-org">※</span>ご連絡先</p>
                    <label for="mail" id="mail_lab">メールアドレス</label>
                       <input class = "mail-text" id ="mail" name="mail" type="text" style="ime-mode:inactive"/>
                </div>
                <div id="inquiry_detail" class="form-box">
                    <p>お問い合わせ内容</p>
                    <textarea name="formbox" id="form-box1" cols="30" rows="10"></textarea>
                </div>

                <div class="chkbox" id ="check">
    <input type="checkbox" id="chkbox3" name="chkbox03" value="1" />
    <label for="chkbox3"><span class = "kome-org">※</span>送信いただいた内容を<a href="https://kodomogekijo.net/wp/privacy/"><span>プライバシーポリシー</span></a>
に基づき扱うことに同意する。</label>
</div>
<div id="sbm">

    <div onClick="javascript:validateForm();"><img src="<?php echo get_template_directory_uri(); ?>/img/btn_sbm.png" alt="フォーム送信"></div>
                </div>
   </div>
   </form>
   </div>
  </div>

</div>

    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html