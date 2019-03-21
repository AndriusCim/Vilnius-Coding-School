$(document).ready(function() {
    $(window).on('scroll', function() {
      if ($(window).scrollTop() > 50) {
        $('.header').addClass('scrolled');
      } else {
        $('.header').removeClass('scrolled');
      }
    });
  });
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "header") {
      x.className += "header";
    } else {
      x.className = "header";
    }
  }
  