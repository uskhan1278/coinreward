/* Theme Name: Coin Reward *
* Developed By: Pratiksha Sharma*
* Version: 1.1, 28 June, 2019*
*/

//Animation on scroll
AOS.init({duration: 1200});

//Header
$(window).scroll(function(){
  var sticky = $('.navbar.fixed-top'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});