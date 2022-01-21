// JavaScript Document
$(function(){

  // お問い合わせ画面　カテゴリによってフォームの内容を切り替え
  $('.selectCategory select').change(function() {
    var selectVal = $('.selectCategory select').val();
    console.log(selectVal);
    if (selectVal == 'Webサイト制作' || 'Webシステム開発・CMS開発' || 'メディアサイト開発・Wordpress対応' || 'ios・Androidアプリ開発') {
      $('.categorySite_Name').css('display', 'flex');
      $('.categorySite_form').css('display', 'block');
    } else {
      $('.categorySite_Name').css('display', 'none');
      $('.categorySite_form').css('display', 'none');
    }
  });


});