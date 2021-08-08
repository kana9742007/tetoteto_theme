$(function() {
  var current_scrollY;
  var humMenuState = 0;

  //ローディングアニメーション
  function loadingAnimation() {
  var current_scrollY_start = $(window).scrollTop();

  function loadingDelete(){
    setTimeout(function() {
      $('#loadInner').addClass('loaded');
      setTimeout(function() {
        $('#loading').addClass('loaded');
        $('body').removeClass('bind');
        setTimeout(function() {
          $('#mainTitle').removeClass('loading_delayed_effect');
          setTimeout(function() {
            $('#mainSection').removeClass('loading_effect');
            $('#mainTitle').removeClass('loading_effect');
          }, 600);
        }, 1000);
      }, 1000);
    }, 1000);
  }


  function init(){
    if(current_scrollY_start < 100){
      $('body').addClass('bind');
    }
    setTimeout(function() {
      loadingDelete();
    }, 1000);
  }

  init();

}

if (document.getElementById('index')) {
  loadingAnimation($('#mainSlider'));
}

function hummenuAnker(target){
  var scrollObj = [];
  var scrollHref = [];

  function windowMove(e) {
    if(humMenuState != 0){
      $('#hummenu').removeClass('open');
      $('header').removeClass('hum_open');
      $('html, body').prop({scrollTop: current_scrollY});
      humMenuState = 0;
      $(this).removeClass('open');
    }
    var w = $(window).width();
    var scrollHeight = $(scrollHref[e]).offset().top;
    if (w > 1100) {
      var adScroll = scrollHeight;
    } else {
      var adScroll = scrollHeight;
    }
    $("html, body").stop().animate({scrollTop: adScroll}, 400);
    setTimeout(function() {
      $('#humClose').click();
    }, 200);
  }

  function init() {
    $.each(target.find('button'), function(index) {
      scrollObj[index] = $(this);
      scrollHref[index] = $(this).attr("scrollhref");
      scrollObj[index].on({
        'click': function() {
          windowMove(index);
        }
      });
    });
  }

  init();

}

hummenuAnker($('#scrollNav'));
hummenuAnker($('#hummenu'));


  //ヘッダーのスクロール制御
  function scrollJudge(target) {
    var scrollSwitch = 0;
    var wHeight = $(window).height();

    function afterScroll() {
      $('header').addClass('rolled');
      $('#mainSns').addClass('rolled');
      if (document.getElementById('planDetail')) {
        $('#fixedCartButton').addClass('display');
      }
      scrollSwitch = 1;
    };


    function beforeScroll() {
      $('header').removeClass('rolled');
      $('#mainSns').removeClass('rolled');
      if (document.getElementById('planDetail')) {
        $('#fixedCartButton').removeClass('display');
      }
      scrollSwitch = 0;
  };

  function init() {
    var timer = false;
    var delayedEffect = [];
    $(window).on({
      'load': function() {
        var scroll = $(window).scrollTop();
        if (scroll > wHeight) {
          if (scrollSwitch == 0) {
            afterScroll();
          }
        } else {
          if (scrollSwitch == 1) {
            beforeScroll();
          }
        }
      },
      'scroll': function() {
        if (timer !== false) {
          clearTimeout(timer);
        }
        timer = setTimeout(function() {
          var scroll = $(window).scrollTop();
          if (scroll > 300) {
            if (scrollSwitch == 0) {
              afterScroll();
            }
          } else {
            if (scrollSwitch == 1) {
              beforeScroll();
            }
          }
        }, 1);
        $(".effect").each(function() {
          var imgPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > imgPos - windowHeight + windowHeight / 7) {
            $(this).removeClass('effect');
          };
        });
        $(".delayed_effect").each(function(index) {
          delayedEffect[index] = $(this);
          var imgPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > imgPos - windowHeight + windowHeight / 7) {
            setTimeout(function() {
              delayedEffect[index].removeClass('delayed_effect');
            }, 700);
          };
        });
      }
    });
  };

  init();

};
  scrollJudge($('body'));



// ハンバーガーメニューの開閉
function humMenuControll2(target){
  var header = $('header');
  var humMenuButton = $('#humButton');
  var fadeBox = [];

  function hummenuMove(){
    if(humMenuState == 0){
      target.addClass('open');
      header.addClass('hum_open');
      setTimeout(function() {
        target.find('.fade_box').each(function(index) {
          fadeBox[index] = $(this);
          var duration = 130 * index;
          setTimeout(function() {
            fadeBox[index].addClass('display');
          }, duration);
        });
      },400);
      humMenuState = 1;
    }else{
      target.removeClass('open');
      header.removeClass('hum_open');
      humMenuState = 0;
      setTimeout(function() {
        target.find('.fade_box').each(function(index) {
          $(this).removeClass('display');
        });
      },400);
    }
  }

  function init(){
    humMenuButton.on({
      'click': function(){
        hummenuMove();
      }
    })
  }

  init();
}

humMenuControll2($('#hummenu'));

});
