<!-- フォーム用 -->

<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8"><!-- フォーム連携用 -->
        <title><?php wp_title(); ?> | 新宿子ども劇場</title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <!-- css読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/apply.css" type="text/css" media="screen" /> 
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css">
        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
        <!-- ビューポートの設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <!-- jqueryの設定  -->
        <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

    <!-- jsファイル読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/apply_form.js"></script>

        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>

<script>
  function validateForm(){
   if(document.getElementById("familyname").value==""|| document.getElementById("chkbox3").checked==false
   || document.getElementById("familuname_kana").value=="" || document.getElementById("firstname").value=="" || document.getElementById("firstname_kana").value==""
   || document.getElementById("familyname2").value==""
   || document.getElementById("familuname_kana2").value=="" || document.getElementById("firstname2").value=="" || document.getElementById("firstname_kana2").value==""
   || document.getElementById("school").value=="" || document.getElementById("birthyear").value==""
   || document.getElementById("birthmonth").value=="" || document.getElementById("birthday").value=="" || document.getElementById("sex").value==""
   || document.getElementById("phone-num").value=="" || document.getElementById("mail").value=="" || document.getElementById("zip21").value==""
   || document.getElementById("zip22").value=="" || document.getElementById("addr21").value=="" || document.getElementById("addr3").value=="" || document.getElementById("month").value==""){
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
  <iframe src="#" id="fake-target" name="fake-target" style="width:0px; height:0px; border:0px;"></iframe>
  <div id="thanks_none">
  <h1 class = "ffinquiry">入会のお申し込み</h1>
  <div class = "contact-wrapper1">
    <div id="contain">
   <form id="formID" action= "https://script.google.com/macros/s/AKfycbz1ypHxL9K1U2BVAhPN4hEtIsykPCzHxS5_ostsY0BQUo8WBXgS/exec" method="post" target="fake-target">
    
    <div id="form-name" class="form-box">
        <p class = "prt-name"><span class = "kome-org">※</span>保護者のお名前1</p>
        <div class="sei_kanji">
                <label for="familyname">姓</label>
                <input id="familyname" type="text" name="familyname_kanji1" value="" placeholder="劇場">
            </div>

<div class="sei_kana">
        <label for="familuname_kana">セイ</label>
        <input id="familuname_kana" type="text" name="familyname_kana1" value="" placeholder="ゲキジョウ">
    </div>

    <div class="na_kanji">
            <label for="firstname">名</label>
            <input id="firstname" type="text" name="firstname_kanji1" value="" placeholder="太郎">
        </div>

        <div class="na_kana">
                <label for="firstname">メイ</label>
                <input id="firstname_kana" type="text" name="firstname_kana1" value="" placeholder="タロウ">
            </div>

    <div id="item2"></div>

<div onClick="ItemField.add();" class="add-btn1"/>複数人ご登録される方はこちら</div>
        </div>
<!--お子様の情報-->
<div class="info-children add-child form-box">
        <p><span class = "kome-org">※</span>参加されるお子様のお名前1</p>
        <div class="name-child">
                <div class="sei_kanji">
                    <label for="familyname2">姓</label>
                    <input id="familyname2" type="text" name="second_familyname_kanji1" value="" placeholder="劇場">
                </div>

                <div class="sei_kana">
                        <label for="familuname_kana2">セイ</label>
                        <input id="familuname_kana2" type="text" name="second_familyname_kana1" value="" placeholder="ゲキジョウ">
                    </div>

                    <div class="na_kanji">
                            <label for="firstname2">名</label>
                            <input id="firstname2" type="text" name="second_firstname_kanji1" value="" placeholder="太郎">
                        </div>

                        <div class="na_kana">
                                <label for="firstname2">メイ</label>
                                <input id="firstname_kana2" type="text" name="second_firstname_kana1" value="" placeholder="タロウ">
                            </div>
                        </div>

                        <div id="child-detail">
                                <div class="container pt20">
                                    <div class="row">
                                        <div class="col-xs-12">
                                        <div class="school">
                                            <label class="control-label">属性</label>
                                            <div class="select-wrap school-select-wrap">
                                            <select name="school1" id="school">
                                                <option value="幼稚園・保育園・未就園">幼稚園・保育園・未就園</option>
                                                <option value="小学生">小学生</option>
                                                <option value="中学生">中学生</option>
                                                <option value="高校生">高校生</option>
                                            </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="school-name">
                                    <label for="school-name">学園・学校名</label>
                                    <input id="school-name" type="text" name="school-name1">
                                </div>
                                <div class="birth">
                                    <label for="birth">生年月日</label>
                                    <input id="birthyear" type="text" name="birthyear1">年
                                    <input id="birthmonth" type="text" name="birthmonth1">月
                                    <input id="birthday" type="text" name="birthday1">日
                                </div>
                            
                                <div class="container pt20 sex">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="sex-select">
                                                <label class="control-label">性別</label>
                                                <div class="select-wrap school-select-wrap">
                                                    <select name="sex" id="sex">
                                                        <option value="男">男</option>
                                                        <option value="女">女</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>




    <div id="pitem2"></div>

    <div onClick="ItemField1.add();" class="add-btn1"/>複数人ご登録される方はこちら</div>
   </div>

<!--連絡先-->
<div id="form-contact" class="form-box">
                    <p><span class = "kome-org">※</span>ご連絡先</p>
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
                            <input type="text" name="zip21" id="zip21" size="4" maxlength="3" style="width: 10%;"> － <input type="text" name="zip22" id="zip22" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');" style="width: 14%;">
                        <!-- ▼住所入力フィールド(都道府県+以降の住所) -->
                        <div id="ad2">
                            <input type="text" name="addr21" id="addr21" size="40">
                        </div>
                        <div id="ad3">
                            <label for="addr3">番地・施設名</label>
                            <input type="text" id="addr3" name="addr3" size="40">
                        </div>
                    </div>


                </div>
                <!-- 入会開始-->
                <div id="entry_start"　class="form-box">
                    <div class="container pt20">
                            <div class="row">
                                <div class="col-xs-12">
                                <div class="school">
                                    <label class="control-label">入会希望月</label>
                                    <div class="select-wrap school-select-wrap">
                                    <select name="month" id="month">
                                        <option value="1月">1月</option>
                                        <option value="2月">2月</option>
                                        <option value="3月">3月</option>
                                        <option value="4月">4月</option>
                                        <option value="5月">5月</option>
                                        <option value="6月">6月</option>
                                        <option value="7月">7月</option>
                                        <option value="8月">8月</option>
                                        <option value="9月">9月</option>
                                        <option value="10月">10月</option>
                                        <option value="11月">11月</option>
                                        <option value="12月">12月</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                    <p>会員制度には、若い世代に向けた<ユース会員>や子ども劇場の活動を継続的に支える<賛助会員>などもあります。詳しくはお問い合わせ下さい。</p>

                </div>


                <div class="chkbox" id ="check">
    <input type="checkbox" id="chkbox3" name="chkbox03" value="1" />
    <label for="chkbox3"><span class = "kome-org">※</span>送信いただいた内容を<span>プライバシーポリシー</span>
に基づき扱うことに同意する。</label>
</div>

<!--紹介者-->
<div id = "intro-space" class="form-box">
    <p>紹介者がある場合は記入をお願いします。</p>
    <label for="mail" id="mail_lab">紹介者</label>
　   <input id="introduce" type="text" name="introduce" value="" placeholder="">
 </div>



<div id="sbm">

    <div onClick="javascript:validateForm();"><img src="<?php echo get_template_directory_uri(); ?>/img/btn_sbm_apply.png" alt="フォーム送信"></div>
                </div>
   </div>
   </form>
   </div>
  </div>

</div>

    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>