$(function() {
  var current_scrollY;
  var humMenuState = 0;
  var ref = document.referrer;
  var deleteState = 0;
  var current_scrollY_start = $(window).scrollTop();
  if ( ref.match(/tetoteto.co/)) {
    var duration = 500;
    $('body').removeClass('loading');
  }else{
    var duration = 1000;
    $('body').removeClass('loading');
    $('#loading').addClass('display');
  }

  function loadingKvShifter(){
    var animationBox = $('#logoAnimation');
    var sliderLength = 5;
    var objSelect;
    var timeId;
    var duration = 850;
    var interval = 850;
    var current = -1;
    var objBox = [];
    var btnList = [];

  function changeState() {
    current++;
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
    }else if(current == 5){
      $('#logoTxt').addClass('display');
      loadingAnimation($('#mainSlider'));
      stopAuto();
    }
    complete();
    current = e;
  };

  function init() {
    if ( ref.match(/tetoteto.co/)) {
      $('body').removeClass('bind');
      $('#loading').remove();
      loadingAnimation($('#mainSlider'));
    }else{
      if(current_scrollY_start < 100){
        $('body').addClass('bind');
      }
    }
    
    startAuto();
  };

  init();
}

if (document.getElementById('index')) {
  loadingKvShifter();
}



  //ローディングアニメーション
  function loadingAnimation(target) {
  console.log('loadingAnimation');
  var originSrc = [];
  var loadingCount = 0;
  var imgLength = target.find('li').length;
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
      var current = 0;
      var objBox = [];
      var btnList = [];

    function changeState2() {
      console.log('changeState2');
      if (current < sliderLength2 - 1) {
        current = current + 1;
        console.log('current:' + current);
      } else {
        console.log('return');
        current = 0;
      }

      slideChange2(current)
    }

    function backState2() {
      if (current != 0) {
        current = current - 1;
      } else {
        current = sliderLength2 - 1;
      }

      slideChange2(current)
    }

    function clickTn(num) {
      console.log('clickTn');
      if (num ==  1) {
        changeState2();
      }else{
        backState2();
      }
    }

    function slideChange2(e) {
      console.log('e:' + e);
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
        },1600);
        gaugeDisplay.animate({
          'height': 100 + '%'
        }, 8000, function() {
          gaugeDisplay.stop().animate({'height': 0 + '%'}, 0);
          clickTn(1);
        });
      }, 5);
    };
    

    function initSet() {
      gaugeDisplay.animate({
        'height': 100 + '%'
      }, 8000, function() {
        gaugeDisplay.stop().animate({'height': 0 + '%'}, 0);
        clickTn(1);
      });
      slider.find('li').each(function(index) {
        if(index == 0){
          $(this).addClass('display_slide2');
        }
        $(this).addClass('main' + index);
      });
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

    initSet();

  }
  
  function loadingDelete(){
    deleteState = 1;
    setTimeout(function() {
      $('#loadInner').addClass('loaded');
      setTimeout(function() {
        $('#loading').addClass('loaded');
        $('body').removeClass('bind');
        setTimeout(function() {
          homeKvShifter();
        }, duration);
      }, duration);
    }, duration);
  }


  function init(){
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
            if(deleteState != 1){
              loadingDelete();
            }
          }
        }
      })
    });
    setTimeout(function() {
      if(loadingState == 0){
        if(deleteState != 1){
          loadingDelete();
        }
      }
    }, 8000);
  }

  init();

}

//ローディングアニメーション



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


function categoryToggle(target){
  var searchBox = [];
  var toggleButton = [];
  var toggleContents = [];
  var toggleState = [];
  var filterButton = [];
  var filterButtonHref = [];
  var projectList = $('#projectList');
  var indexState = -1;

  function toggleMove(e) {
    if (toggleState[e] == -1 || toggleState[e] == 0) {
      toggleButton[e].addClass('active');
      var buttonHeight = toggleButton[e].outerHeight();
      var tagetHeight = toggleContents[e].outerHeight();
      searchBox[e].css({
        'height': buttonHeight + tagetHeight + 'px'
      });
      toggleState[e] = 1;
    } else {
      toggleButton[e].removeClass('active');
      var toggleHeight = toggleButton[e].outerHeight();
        searchBox[e].css({
          'height': toggleHeight + 'px'
        });
      toggleState[e] = 0;
    }
  }
  
  function changeCaseFilter(targetURL){
    if(targetURL == 'defaultURL'){
      targetURL = location.href;
    }
    var targetHeight = projectList.offset().top;
    projectList.addClass('loading');
    $("html, body").animate({scrollTop: targetHeight - 40}, 500);
    $.ajax({
      url: targetURL,
      cache: false,
      dataType: 'html',
      success: function(html) {
          var product_num = 40; //抜き出したい商品の数
          var prop = [];
          var category = [];
          var list = $(html).find('#projectList').html();
          projectList.html('');
          projectList.append(list);
          setTimeout(function() {
            projectList.removeClass('loading');
          },400);
        }
    });
  }

  function init() {
    $.each(target.find('.search_box'), function(index) {
      searchBox[index] = $(this);
      toggleButton[index] = $(this).find('.toggle_button');
      toggleContents[index] = $(this).find('.toggle_content');
      $(this).css({'height': toggleButton[index].outerHeight() + 'px'});
      toggleState[index] = -1;
      toggleButton[index].on({
        'click': function() {
          toggleMove(index);
        }
      });
    });
    $.each(target.find('a'), function(index) {
      filterButton[index] = $(this);
      filterButtonHref[index] = $(this).attr('href');
      $(this).attr('url', filterButtonHref[index]);
      $(this).attr('href', 'javascript:void(0);');
      $(this).on({
        'click': function() {
          if(index != indexState){
            target.find('.active').removeClass('active');
            $(this).addClass('active');
            changeCaseFilter(filterButtonHref[index]);
            indexState = index;
          }else{
            target.find('.active').removeClass('active');
            changeCaseFilter('defaultURL');
            indexState = -1;
          }
        }
      });
    });
  }

  init();
}


if (document.getElementById('caseList')) {
  categoryToggle($('#serchWrapper'));
}



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
