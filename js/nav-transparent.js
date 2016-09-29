$(window).scroll(function() {
  if ($(".navbar").offset().top > 50) {
    $(".navbar-fixed-top").removeClass("navbar-transparent");
  } else {
    $(".navbar-fixed-top").addClass("navbar-transparent");
  }
});
