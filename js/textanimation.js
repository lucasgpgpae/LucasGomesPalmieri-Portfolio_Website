$(function(){

  var animacao = "animated rubberBand";
  var fimAnimacao = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
  var wordclass = "thep animationreceiver";

  $(document).on('mouseover', 'div', function(e) {
    if($(e.target).attr('class') == wordclass){
      $("#"+$(e.target).attr('id')).addClass(animacao).one(fimAnimacao, function(){
        $(this).removeClass(animacao);
      });
    }
  });
});
