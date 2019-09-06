<!-- フォーム用 -->

<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8"><!-- フォーム連携用 -->
        <title><?php wp_title(); ?> | 新宿子ども劇場</title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <!-- css読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/apply_appreciation.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <!-- ビューポートの設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <!-- jqueryの設定  -->
        <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

    <!-- jsファイル読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>

        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>

<script>
  function validateForm(){
   if(document.getElementById("familyname").value==""|| document.getElementById("chkbox3").checked==false || document.getElementById("event").value =="参加するイベントを選択"
   || document.getElementById("familuname_kana").value=="" || document.getElementById("firstname").value=="" || document.getElementById("firstname_kana").value==""
   || document.getElementById("number_adult").value=="" || document.getElementById("number_child").value=="" || document.getElementById("number_child_th").value=="" || document.getElementById("phone-num").value==""
   || document.getElementById("mail").value=="" || document.getElementById("zip21").value=="" || document.getElementById("zip22").value=="" || document.getElementById("addr21").value=="" || document.getElementById("addr2111").value==""){
    alert("記入漏れがあります。");
    return false;
   }else{
    document.getElementById("formID").submit();
    document.getElementById("thankyou").style.display="";
    document.getElementById("thankyou").innerHTML="<center><h2>お申し込みありがとうございました</h2><p>入力頂いたメールアドレスに、確認メール（自動返信メール）を送信させて頂いております。</p><p>送信内容を確認の上、担当者より折り返し連絡を差し上げますので、少々お待ちください。</p><p>今後ともどうぞよろしくお願いいたします。</p></center>";
    document.getElementById("thanks_none").style.display="none";
    document.all.item('moji1').style.visibility='visible';
   }
  }
 </script>

  <body>
  <?php get_header(); ?>
  <div style="display:none;" id="thankyou">
  <div class = "blan_blank"></div>
  </div>
  <div id="thanks_none">  
<div class = "contact-wrapper1">
  <iframe src="#" id="fake-target" name="fake-target" style="width:0px; height:0px; border:0px;"></iframe>
  <div id="thanks_none">
  <h1 class = "ffinquiry">鑑賞会のお申し込み</h1>

    <div id="contain">
   <form id="formID" action= "https://script.google.com/macros/s/AKfycby9Hlsqtj6ShwBdwRzEwa_8aTxmxjtyvhRYJJOuieq1NuGXLSAD/exec" method="post" target="fake-target">
    
    <div class="container pt20 form-box">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="form-group">
                        <label class="control-label">お申し込みイベント</label>
                        <div class="select-wrap">
                        <select name="event" id="event"> 
<option>参加するイベントを選択</option>
<?php
$args = array(
    'numberposts' => -1,
    'taxonomy' => 'tags',
    'term' => '#鑑賞会',
    'post_type' => 'event', // カスタム投稿タイプを指定
    'meta_key' => 'application', // カスタムフィールド キー
    'meta_value' => '申込受付中'// カスタムフィールド キー
    
);
$customPosts = get_posts($args);
if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
?>
<option value="<?php the_title_attribute(); ?>"><?php the_title_attribute(); ?></option>
<?php endforeach; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</select>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

<!--名前-->
                <div id="form-name" class="form-box">
                    <p>お申し込み者のお名前</p>
                    <div id="sei_kanji">
                        <label for="familyname">姓</label>
                        <input id="familyname" type="text" name="familyname_kanji" value="" placeholder="劇場">
                    </div>
                    
                    <div id="sei_kana">
                        <label for="familuname_kana">セイ</label>
                        <input id="familuname_kana" type="text" name="familyname_kana" value="" placeholder="ゲキジョウ">
                    </div>

                    <div id="na_kanji">
                        <label for="firstname">名</label>
                        <input id="firstname" type="text" name="firstname_kanji" value="" placeholder="太郎">
                    </div>

                    <div id="na_kana">
                        <label for="firstname">メイ</label>
                        <input id="firstname_kana" type="text" name="firstname_kana" value="" placeholder="タロウ">
                    </div>
                </div>

<!--人数-->
                <div id="form-number" class="form-box">
                    <p>お申し込み人数</p>
                    <div id="number_ad">
                        <label for="number_adult">大人</label>
                        <input id="number_adult" type="text" name="number_adult" value="" placeholder="">
                        <label>人</label>
                    </div>
                    
                    <div id="number_ch">
                        <label for="number_child">お子様（3歳以上）</label>
                        <input id="number_child" type="text" name="number_child" value="" placeholder="">
                        <label>人</label>
                    </div>

                    <div id="number_ch">
                        <label for="number_child">お子様（3歳未満）</label>
                        <input id="number_child_th" type="text" name="number_child_th" value="" placeholder="">
                        <label>人</label>
                    </div>
                </div>

<!--連絡先-->
                <div id="form-contact" class="form-box">
                    <p>ご連絡先</p>
                    <div id="phone">
                        <label for="phone-num" id="phone-num">電話番号</label>
                        <input id="phone-num" type="text" name="phone-num" value="" placeholder="">
                    </div>

                    <label for="mail" id="mail_lab">メールアドレス</label>
                    <input id="mail" type="text" name="mail" value="" placeholder="">


                    <div>
                            <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
                            <label for="" id="address">ご住所</label>
                            <label for="">〒</label>
                            <input type="text" id="zip21" name="zip21" size="4" maxlength="3" style="width: 10%;"> － <input type="text" id="zip22" name="zip22" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" style="width: 14%;">
                        <!-- ▼住所入力フィールド(都道府県+以降の住所) -->
                        <div id="ad2">
                            <input type="text" id ="addr21" name="addr21" size="40">
                        </div>
                        <div id="ad3">
                            <label for="">番地・施設名</label>
                            <input type="text" name="addr2111" id="addr2111" size="40">
                        </div>
                    </div>


                </div>

<!--備考欄-->
                <div id="remarks" class="form-box">
                    <p>備考欄</p>
                    <textarea name="remarks" id="remarks" cols="30" rows="10"></textarea>
                </div>

                <!--<div id="check" class="form-box">
                    <input type="checkbox">
                    <p>送信いただいた内容をプライバシーポリシーに基づき扱うことに同意する。</p>
                </div>-->
                <div class="chkbox" id="check">
    <input type="checkbox" id="chkbox3" name="chkbox03" value="1" />
    <label for="chkbox3">送信いただいた内容を<a href="https://kodomogekijo.net/wp/privacy/"><span>プライバシーポリシー</span></a>
に基づき扱うことに同意する。</label>
</div>

    
<div id="sbm">
    <div onClick="javascript:validateForm();"><img src="<?php echo get_template_directory_uri(); ?>/img/btn_sbm1.png" alt="フォーム送信"></div>
</div>
   </form>
   </div>
  </div>

</div>
   </div>

    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルー�