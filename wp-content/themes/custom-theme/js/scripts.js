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


