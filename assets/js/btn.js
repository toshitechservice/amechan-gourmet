$(function(){
  /*=================================================
  ハンバーガ―メニュー
  ===================================================*/
  // ハンバーガーメニュークリック時
  $('.toggle-btn').on('click', function() {
    if($('#header').hasClass('active')) {
      $('#header').removeClass('active');
    } else {
      $('#header').addClass('active');
    }
  });

  // メニュー表示中の画面クリック時
  $('#mask').on('click', function() {
    $('#header').removeClass('active');
  });

});