$(document).ready(function(){
	var scrollTop = 0;
	$(window).scroll(function(){
	  scrollTop = $(window).scrollTop();
	   $('.counter').html(scrollTop);
	  
	  if (scrollTop >= 100) {
		$('#logo-big').addClass('logo-scroll');
	  } else if (scrollTop < 100) {
		$('#logo-big').removeClass('logo-scroll');
	  } 
	  
	}); 
	
  });









