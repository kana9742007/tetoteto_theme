$(function() {
  var current_scrollY;
  var humMenuState = 0;

  function loadingKvShifter(){
    var animationBox = $('#logoAnimation');
    var sliderLength = 5;
    var objSelect;
    var timeId;
    var duration = 1200;
    var interval = 1200;
    var current = 0;
    var objBox = [];
    var btnList = [];

  function changeState() {
    if (current < sliderLength) {
      current++;
    } else {
      current = 0;
    }
    slideChange(current)
  }

  function startAuto() {
    timeId = setTimeout(changeState, interval);
  }

  function stopAuto() {
    clearTimeout(timeId)
  }

  function complete() {
    startAuto();
  }

  function slideChange(e) {
    if(current != 5){
      animationBox.addClass('animation' + e);
    }else{
      $('#logoTxt').addClass('display');
      loadingAnimation($('#mainSlider'));
    }
    complete();
    current = e;
  };

  function init() {
    /*animationBox.addClass('animation0');*/
    startAuto();
  };

  init();
}

if (document.getElementById('index')) {
  loadingKvShifter();
}



  //ローディングアニメーション
  function loadingAnimation(target) {
  var originSrc = [];
  var loadingCount = 0;
  var imgLength = target.find('li').length;
  var current_scrollY_start = $(window).scrollTop();
  var loadingState = 0;
  var sliderLength2 = $('#mainSlider').find('li').length;
  var currentNum = $('#currentNum');
  var allNum = $('#allNum');

    function homeKvShifter(){
      var slider = $('#mainSlider');
      var gaugeDisplay = $('#gaugeDisplay');
      var mainSlidePrev = $('#mainSlidePrev');
      var mainSlideNext =  $('#mainSlideNext');
      var objSelect;
      var timeId;
      var duration = 8000;
      var interval2 = 8000;
      var current = -1;
      var objBox = [];
      var btnList = [];

    function changeState2() {
      if (current < sliderLength2 - 1) {
        current++;
      } else {
        current = 0;
      }

      slideChange2(current)
    }

    function backState2() {
      if (current != 0) {
        current--;
      } else {
        current = sliderLength2 - 1;
      }

      slideChange2(current)
    }

    function clickTn(num) {
      if (num ==  1) {
        changeState2();
      }else{
        backState2();
      }
    }

    function slideChange2(e) {
      gaugeDisplay.stop().animate({'height': 0 + '%'}, 0);
      $('.display_slide2').removeClass('display_slide2').addClass('display_slide3');
      setTimeout(function() {
        $('.main' + e).addClass('display_slide2');
        var currentNumber = current + 1;
        currentNum.html('0'+ currentNumber);
        current = e;
        setTimeout(function() {
          $('.display_slide3').removeClass('display_slide3');
          $('#mainSlidePrev').removeClass('disable');
          $('#mainSlideNext').removeClass('disable');
        },2500);
        gaugeDisplay.stop().animate({
          'height': 100 + '%'
        }, 8000, function() {
          gaugeDisplay.stop().animate({'height': 0 + '%'}, 0);
          changeState2();
        });
      }, 5);
    };

    function init() {
      gaugeDisplay.animate({'height': 100 + '%'}, 8000);
      slider.find('li').each(function(index) {
        if(index == 0){
          $(this).addClass('display_slide2');
        }
        $(this).addClass('main' + index);
      });
      changeState2();
      mainSlideNext.on({
        'click': function(){
          clickTn(1);
          $('#mainSlidePrev').addClass('disable');
          $('#mainSlideNext').addClass('disable');
        }
      })
      mainSlidePrev.on({
        'click': function(){
          clickTn(-1);
          $('#mainSlidePrev').addClass('disable');
          $('#mainSlideNext').addClass('disable');
        }
      })
    };

    init();

  }

  function loadingDelete(){
    setTimeout(function() {
      $('#loadInner').addClass('loaded');
      setTimeout(function() {
        $('#loading').addClass('loaded');
        $('body').removeClass('bind');
        setTimeout(function() {
          homeKvShifter();
        }, 1000);
      }, 1000);
    }, 1000);
  }


  function init(){
    if(current_scrollY_start < 100){
      $('body').addClass('bind');
    }
    allNum.html('0' + sliderLength2);
    target.find('li img').each(function(index) {
      originSrc[index] = $(this).attr('src');
      $(this).attr('src', "");
      $(this).attr('src', originSrc[index]);
      $(this).on({
        'load': function(){
          loadingCount = loadingCount + 1;
          if(loadingCount = imgLength){
            loadingState = 1;
            loadingDelete();
          }
        }
      })
    });
    setTimeout(function() {
      if(loadingState == 0){
        loadingDelete();
      }
    }, 8000);
  }

  init();

}

if (document.getElementById('index')) {}


  //ヘッダーのスクロール制御
  function scrollJudge(target) {
    var scrollSwitch = 0;
    var wHeight = $(window).height();

    function afterScroll() {
      $('header').addClass('rolled');
      $('#mainSns').addClass('rolled');
      $('#serviceBg').addClass('rolled');
      scrollSwitch = 1;
    };


    function beforeScroll() {
      $('header').removeClass('rolled');
      $('#mainSns').removeClass('rolled');
      $('#serviceBg').removeClass('rolled');
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
            }, 500);
          };
        });
      }
    });
  };

  init();

};
  scrollJudge($('body'));

  //ページトップに戻るボタン
  function returnTop(){
    var returnTop = $('#returnTop').find('button');
    returnTop.on({
      'click': function() {
        $("html, body").animate({scrollTop: 0}, 600);
      }
    });
  }

  returnTop();


  /* トップページ メインのピックアップ画像切り替え */
  function slideItemThumb(target) {
  var currentSlide = 1;
  var sliderImg = [];
  var targetSlide;
  var targetImgWrap = $('#mainPickImg');
  var targetImg = $('#mainPickImg').find('img');
  var slideNum = target.find('li').length - 1;
  var slideNextButton = target.find('.slide_next');
  var slidePrevButton = target.find('.slide_prev');

  function slideChange(e) {
    targetImgWrap.addClass('slide_change');
    setTimeout(function() {
      targetImg.attr('src', sliderImg[e]);
      targetImgWrap.removeClass('slide_change');
    }, 500);
    /*targetSlide = target.find('.slide' + currentSlide);
    target.find('.active_slide').removeClass('active_slide');
    targetSlide.addClass('active_slide');
    target.find('.current').text(currentSlide);*/
  };

  function slideNext(){
    if (currentSlide < slideNum - 0.1) {
      currentSlide = currentSlide + 1;
    } else {
      currentSlide = 1;
    }
    slideChange();
  };

  function slidePrev(){
    if (currentSlide == 1) {
      currentSlide = slideNum;
    } else {
      currentSlide = currentSlide - 1;
    }
    slideChange();
  };

  function tabTouch(){
    if(startTouchX - endTouchX > 50){
      slideNext();
    }else if(startTouchX - endTouchX < - 50){
      slidePrev();
    }
  };

  function windowDrag() {
    if (startDragX - endDragX > 100) {
      slideNext();
    } else if (startDragX - endDragX < -100) {
      slidePrev();
    }
  };

  function init() {
    target.find('button').each(function(index) {
      sliderImg[index] = $(this).find('img').attr('src');
      $(this).on({
        'click': function() {
          $('.active_box').removeClass('active_box');
          $(this).addClass('active_box');
          slideChange(index);
        }
      })
    });



    target.on({
      'touchstart' : function(e){
        startTouchX = event.changedTouches[0].pageX;
      },
      'touchmove' : function(e){
        /*
        movingTouchX = event.changedTouches[0].pageX;
        var movingX = movingTouchX - startTouchX;
        var sliderPosition = parseInt($('#top_slide ul').css('left'));
        Position = sliderPosition + movingX;
        $('#top_slide ul').css({'left': Position + 'px'});
        */
      },
      'touchend' : function(e){
        endTouchX = event.changedTouches[0].pageX;
        tabTouch();
      }
    });
  };

  init();

};

if (document.getElementById('index')) {
  slideItemThumb($('#sliderShifter'));
}

// ハンバーガーメニューの開閉
function humMenuControll(target){
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
  },700);
      humMenuState = 1;
    }else{
      target.removeClass('open');
      header.removeClass('hum_open');
      humMenuState = 0;
      setTimeout(function() {
        target.find('.fade_box').each(function(index) {
          $(this).removeClass('display');
        });
      },700);
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

humMenuControll($('#hummenu'));

// お問い合わせフォームのポップアップ

function contactPopCtrl(target){
  var humClose = $('#entryPopClose');
  var humMenuState = 0;
  var current_scrollY;

  function hummenuMove(e){
    if(humMenuState == 0){
      target.addClass('open');
      humMenuState = 1;
    }else{
      target.removeClass('open');
      humMenuState = 0;
    }
  }

  function init(){
    humClose.on({
      'click': function(){
        hummenuMove();
      }
    })
    $('.func-contact').on({
      'click': function(){
        hummenuMove();
      }
    })
  }

  init()

}

contactPopCtrl($('#entryPop'));

function ctrlFooterLink(){
  var spaceOwner = $('#spaceOwner');
  var farmer = $('#farmer');
  var selector = $('select[name=category]');
  spaceOwner.on({
    'click': function(){
      selector.val('スペースオーナーの募集について');
    }
  })
  farmer.on({
    'click': function(){
      selector.val('パートナー農家さんの募集について');
    }
  })
}

ctrlFooterLink();


if (document.getElementById('index')) {
  $('#caseSlider').slick({
    accessibility: true,
    infinite: true,
    dots: false,
    slidesToShow: 3,
    centerMode: false,
    autoplay: false,
    responsive: [
      {
        breakpoint: 1150,
        settings: {
          slidesToShow: 3,
          centerMode: true,
        }
      },
      {
        breakpoint: 620,
        settings: {
          slidesToShow: 2,
          centerMode: true,
        }
      },
    ]
  });
}

if (document.getElementById('about')) {
  $('#workSlider').slick({
    accessibility: true,
    infinite: true,
    dots: false,
    slidesToShow: 3,
    centerMode: false,
    autoplay: false,
    responsive: [
      {
        breakpoint: 720,
        settings: {
          slidesToShow: 1,
          centerMode: true,
        }
      },
    ]
  });
  $('#wakuwakuSlider').slick({
    accessibility: true,
    infinite: true,
    dots: false,
    slidesToShow: 3,
    centerMode: false,
    autoplay: false,
    responsive: [
      {
        breakpoint: 720,
        settings: {
          slidesToShow: 1,
          centerMode: true,
        }
      },
    ]
  });
}

});
