$(function(){
    $('.slider').slick({
        accessibility: true,
        autoplay: true,
        autoplaySpeed: 6000,
        dots: true,
        fade: true,
    });

     // FAQのアコーディオン
  $('.faq-list-item').click(function() {
    var $answer = $(this).find('.answer');
    if($answer.hasClass('open')) { 
      $answer.removeClass('open');
      // slideUpメソッドを用いて、$answerを隠してください
      $answer.slideUp();

      // 子要素のspanタグの中身をtextメソッドを用いて書き換えてください
      $(this).find('span').text('+');
      
    } else {
      $answer.addClass('open'); 
      // slideDownメソッドを用いて、$answerを表示してください
      $answer.slideDown();
      
      // 子要素のspanタグの中身をtextメソッドを用いて書き換えてください
      $(this).find('span').text('-');
      
    }
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