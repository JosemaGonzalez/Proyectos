  $(document).ready(function () {
    let $img = $('.navbar-fixed img');
    let $nav = $(".navbar-fixed");
    let header = $("header").height();
    $('.section,.parallax-container').css("padding-top",header+10);
    $img.height($nav.height());
    $('.parallax').parallax();
    $('.navbar-fixed').css("z-index","90");
    $('.parallax-container').height($(window).height());
    $('.section').height($(window).height());
    $('.section,.carousel').css("padding-top",$nav.height());
    $('.parallax-container').css("min-height",$nav.height());
    $('.ancla').click(function(e) {
      e.preventDefault();
      let strAncla = $(this).attr('href');
      $('body,html').stop(true, true).animate({
       scrollTop: $(strAncla).offset().top}, 1000);
    });
    $(document).tooltip();
});
