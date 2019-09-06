$(function() {


    //■page topボタン

$(function(){
    var topBtn=$('#pageTop');
    topBtn.hide();
    
     
    
    //◇ボタンの表示設定
    $(window).scroll(function(){
      if($(this).scrollTop()>80){
    
        //---- 画面を80pxスクロールしたら、ボタンを表示する
        topBtn.fadeIn();
    
      }
    });
    
     
    
    // ◇ボタンをクリックしたら、スクロールして上に戻る
    topBtn.click(function(){
      $('body,html').animate({
      scrollTop: 0},500);
      return false;
    
    });
    
    
    });
  
  $(document).on("click", ".add", function () {
 
 // 選択された親要素をコピーし、クリックされた追加ボタンの前に追加する。その後クリックされたボタンが消える
    $(this).parent().clone(true).insertBefore($(this));
    $(this).slideUp();
 
});

});

var ItemField = {
  currentNumber : 1,
  itemTemplate : '<p class = "prt-name">保護者のお名前__count__</p>'
      + '<div class="sei_kanji"><label for="familyname">姓</label><input type="text" name="familyname_kanji__count__" value="" placeholder="劇場"" /></div>'
      +'<br><div class="sei_kana"><label for="familuname_kana">セイ</label><input type="text" name="familyname_kana__count__" value="" placeholder="ゲキジョウ" /></div>'
      +'<br><div class="na_kanji"><label for="firstname">名</label><input type="text" name="firstname_kanji__count__" value="" placeholder="太郎" /></div>'
      +'<br><div class="na_kana"><label for="firstname_kana">メイ</label><input type="text" name="firstname_kana__count__" value="" placeholder="タロウ" /></div>',
  add : function () {
      this.currentNumber++;

      var field = document.getElementById('item' + this.currentNumber);

      var newItem = this.itemTemplate.replace(/__count__/mg, this.currentNumber);
      field.innerHTML = newItem;

      var nextNumber = this.currentNumber + 1;
      var new_area = document.createElement("div");
      new_area.setAttribute("id", "item" + nextNumber);
      field.appendChild(new_area);
  },

}

var ItemField1 = {
  currentNumber : 1,
  itemTemplate : '<p>参加されるお子様のお名前__count__</p>'
      + '<div class="name-child"><div class="sei_kanji"><label for="familyname2">姓</label><input type="text" name="second_familyname_kanji__count__" value="" placeholder="劇場"" /></div>'
      +'<br><div class="sei_kana"><label for="familuname_kana2">セイ</label><input type="text" name="second_familyname_kana__count__" value="" placeholder="ゲキジョウ" /></div>'
      +'<br><div class="na_kanji"><label for="firstname2">名</label><input type="text" name="second_firstname_kanji__count__" value="" placeholder="太郎" /></div>'
      +'<br><div class="na_kana"><label for="firstname_kana2">メイ</label><input type="text" name="second_firstname_kana__count__" value="" placeholder="タロウ" /></div></div>'
      +'<br><div id="child-detail"><div class="container pt20"><div class="row"><div class="col-xs-12"><div class="school"><label class="control-label">属性</label><div class="select-wrap school-select-wrap"><select name="school__count__" id="school"> <option value="小学生">小学生</option><option value="中学生">中学生</option> <option value="高校生">高校生</option></select> </div></div></div></div></div>'
      +'<br><div class="school-name"><label for="school-name">学園・学校名</label><input id="school-name" type="text" name="school-name__count__"></div>'
      +'<br><div class="birth"><label for="birth">生年月日</label><input id="birthyear" type="text" name="birthyear__count__">年<input id="birthmonth" type="text" name="birthmonth__count__">月<input id="birthday" type="text" name="birthday__count__">日</div>'
      +'<br><div class="container pt20 sex"><div class="row"><div class="col-xs-12"><div class="sex-select"><label class="control-label">性別</label><div class="select-wrap school-select-wrap"><select name="sex__count__" id="sex"><option value="男">男</option><option value="女">女</option><option value="その他">その他</option></select></div></div></div></div>',
  add : function () {
      this.currentNumber++;

      var field = document.getElementById('pitem' + this.currentNumber);

      var newItem = this.itemTemplate.replace(/__count__/mg, this.currentNumber);
      field.innerHTML = newItem;

      var nextNumber = this.currentNumber + 1;
      var new_area = document.createElement("div");
      new_area.setAttribute("id", "pitem" + nextNumber);
      field.appendChild(new_area);
  },

}





