$(function() {

  window.addEventListener("load",function() {
    hide();
  });
  $( window ).resize( function() {
    hide();
  });

  $(".search-type .arrow").on("click", function(e){
      $('.search-type .box-bottom').slideToggle();
      if($(this).hasClass('open')){
          $(this).removeClass('open');
      }else{
          $(this).addClass('open');
      }
  });
  $(".search-cat .arrow").on("click", function(e){
      $('.search-cat .box-bottom').slideToggle();
      if($(this).hasClass('open')){
          $(this).removeClass('open');
      }else{
          $(this).addClass('open');
      }
  });
});

function hide(){
  var w = window.innerWidth;
  if(w <= 720){
    $(".search .box-bottom").hide();
  }else{
    $(".search .box-bottom").show();
  }
}