/**
 * Created by Ibrahim Alshalafi
 */

$(document).ready(function () {

	var web_des_dev_flag = true;

	function scroll() {

		if ($(window).scrollTop() > 70) {
			$('.to-top').show();
			$('.to-top').fadeIn();
			$('#main-nav').addClass('navbar-fixed-top');
			$('#main-nav').fadeIn();
		} else {
			$('.to-top').hide();
			$('#main-nav').removeClass('navbar-fixed-top');
			
		}

		if ($(window).scrollTop() > 300  && web_des_dev) {
			web_des_dev = false;
			$('#web_dev').animate({
				top:'0px',	padding_top: '74px', padding_bottom: '74px'
			},1300);
			$('#web_des_dev').animate({
				top:'0px',	padding_top: '74px', padding_bottom: '74px'
			}, 1600);
			$('#psd_html').animate({
				top:'0px',	padding_top: '74px', padding_bottom: '74px'
			}, 1900);
			$('#arabic_temp').animate({
				top:'0px',	padding_top: '74px', padding_bottom: '74px'
			},2200);
		} 
	}
	document.onscroll = scroll;

	//Click event to scroll to top
	$('.to-top').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	$('[data-toggle="tooltip"]').tooltip();

	
	// for portofillo
	$('.project').hover(function() {
      var portofillo = $(this);
      if (portofillo.hasClass("open")) {
          // already been clicked once, hide it
          portofillo.find('.real-img').animate({left: "0"});
          portofillo.find('.description-img').animate({left: "100%"});
          portofillo.removeClass("open");
      }
      else {
          // first time this is clicked, mark it
          portofillo.find('.real-img').animate({left: "-100%"});
          portofillo.find('.description-img').animate({left: "0"});
          portofillo.addClass("open");
      }
    });  


});

