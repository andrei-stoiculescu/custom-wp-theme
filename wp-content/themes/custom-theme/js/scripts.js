
/* NAVBAR BACKGROUND */

$(window).on('scroll', function () {
            if ($(window).scrollTop() > 110) {
                $('.header-top-area').addClass('menu-bg');
            } else {
                $('.header-top-area').removeClass('menu-bg');
            }
        });




/* MOBILE NAVIGATION MENU */
function openNav() {
  document.getElementById("mobile-menu-button").style.width = "100%";
}

function closeNav() {
  document.getElementById("mobile-menu-button").style.width = "0%";
}









//owl carousel test
$(document).ready(function($) {

	var owl = $("#owl-featured-tours");
  owl.owlCarousel({
  	slideSpeed : 200,
    paginationSpeed : 800,
    nav:false,
    pagination :true,
    autoplay: true,
	autoplayTimeout: 4000,
    loop : true,
    responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:3
		},
		992:{
			items:4
		},
		1200:{
			items:4
		}
	}
	
  });
  
	
});