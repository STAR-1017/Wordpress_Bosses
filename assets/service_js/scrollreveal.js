// JavaScript Document
$(function(){
  // 各要素の出現アニメーション
  window.sr = ScrollReveal();

    //オプション項目
    //origin: 'top right bottom left', （アニメーションする方向）
    //distance: '5px 10% 20vw...', （どれくらい離れた位置からアニメーションするか）
    //duration: 500 1000, （アニメーションが完了するまでの時間）
    //delay: 250, （アニメーションを開始する時間）
    //scale: 0～1, （アニメーション開始の要素の大きさ）
    //easing: 'ease, ease_in_out, linear,' etc., （アニメーションの種類）
    //opacity: 0～1, （アニメーション開始の不透明度）
    //mobile: true false, （モバイル端末でも実行するか）
    //reset: true false,  （要素がページに入るたびに実行するか）
    //useDelay: 'always, once, onload,' （遅延を実行する条件）
    //viewFactor: 0.25, （要素がどの程度ページに入った時にアニメーションを実行するか）
    //viewOffset: {top: 0, right: 0, bottom: 0, left: 0} （要素のオフセット。固定ヘッダーなどがある場合に指定）
    //beforeReveal: function (domEl) {} （アニメーションの開始前に実行する処理）
    //afterReveal: function (domEl) {} （アニメーションの開始後に実行する処理）
    //beforeReset: function (domEl) {} （アニメーションのリセット前に実行する処理）
    //afterReset: function (domEl) {} （アニメーションのリセット後に実行する処理）

  var srSetting1 = {
    origin: 'bottom',
    distance: '50px',
    duration: 500,
    delay: 150,
    scale: 1,
    opacity: 0,
    mobile: false,
    reset: false,
    viewFactor: 0.25,
    beforeReveal: function (domEl) {
      $(domEl).addClass('animaStart');
    }
  };
  var srSetting2 = {
    origin: 'bottom',
    distance: '50px',
    duration: 500,
    delay: 300,
    scale: 1,
    opacity: 0,
    mobile: false,
    reset: false,
    viewFactor: 0.25,
    beforeReveal: function (domEl) {
      $(domEl).addClass('animaStart');
    }
  }
  var srSetting3 = {
    origin: 'left',
    distance: '100%',
    duration: 750,
    delay: 200,
    scale: 0.5,
    opacity: 0,
    mobile: false,
    reset: false,
    viewFactor: 0.25,
    beforeReveal: function (domEl) {
      $(domEl).addClass('animaStart');
    }
  };
  var srSetting4 = {
    origin: 'right',
    distance: '100%',
    duration: 750,
    delay: 200,
    scale: 0.5,
    opacity: 0,
    mobile: false,
    reset: false,
    viewFactor: 0.25,
    beforeReveal: function (domEl) {
      $(domEl).addClass('animaStart');
    }
  };
  var srSetting5 = {
    duration: 750,
    delay: 250,
    viewFactor: 0.5,
    origin: 'bottom',
    distance: '10px',
    opacity: 0,
    scale: 0.9,
    rotate: {x: 100},
    reset: false,
    mobile: false,
    beforeReveal: function (domEl) {
      $(domEl).addClass('animaStart');
    }
  };
  var srSetting6 = {
    origin: 'bottom',
    distance: '50px',
    duration: 300,
    delay: 300,
    scale: 0,
    opacity: 1,
    mobile: false,
    reset: false,
    viewFactor: 0.25,
    beforeReveal: function (domEl) {
      $(domEl).addClass('animaStart');
    }
  };

  sr.reveal('.animation1', srSetting1, 100);
  sr.reveal('.animation2', srSetting2, 100);
  sr.reveal('.animation3', srSetting3, 100);
  sr.reveal('.animation4', srSetting4, 100);
  sr.reveal('.animation5', srSetting3, 100);
  sr.reveal('.animation6', srSetting1, 100);
  sr.reveal('.animation7', srSetting5, 100);
  sr.reveal('.animation8', srSetting1, 100);
  sr.reveal('.animation9', srSetting1, 100);
  sr.reveal('.animation10', srSetting1, 100);
});