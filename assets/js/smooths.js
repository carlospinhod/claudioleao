$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});			
var pxScrolled = 500;
$(window).scroll(function() {
				if ($(this).scrollTop() > pxScrolled) {
					$('.fab-container').css({'bottom': '20px', 'transition': '.3s'});
				} else {
					$('.fab-container').css({'bottom': '-100px'});
				} 
});
