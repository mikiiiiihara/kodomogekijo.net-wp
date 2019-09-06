$(function() {

  $('.photo1').click(function(){
    $('.coment1').fadeIn();
  });
  $('.coment1').click(function(){
    $('.coment1').fadeOut();
  });

    $('.photo2').click(function(){
    $('.coment2').fadeIn();
  });
  $('.coment2').click(function(){
    $('.coment2').fadeOut();
  });

  $('.photo3').click(function(){
    $('.coment3').fadeIn();
  });
  $('.coment3').click(function(){
    $('.coment3').fadeOut();
  });

    $('.photo4').click(function(){
    $('.coment4').fadeIn();
  });
  $('.coment4').click(function(){
    $('.coment4').fadeOut();
  });

  $('.photo5').click(function(){
    $('.coment5').fadeIn();
  });
  $('.coment5').click(function(){
    $('.coment5').fadeOut();
  });

  $('.photo6').click(function(){
    $('.coment6').fadeIn();
  });
  $('.coment6').click(function(){
    $('.coment6').fadeOut();
  });


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
  
});