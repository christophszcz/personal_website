$(window).scroll(function() {
  var aboutScroll = $('#about-scroll').offset().top,
  aboutMargin = $('#about-scroll').outerHeight(),
  portfolioScroll = $('#portfolio-scroll').offset().top,
  portfolioMargin = $('#portfolio-scroll').outerHeight(),
  channelScroll = $('#channel-scroll').offset().top,
  channelMargin = $('#channel-scroll').outerHeight(),
  contactScroll = $('#contact-scroll').offset().top,
  contactMargin = $('#contact-scroll').outerHeight(),
  windowHeight = $(window).height(),
  windowScroll = $(this).scrollTop();
  if (windowScroll < (aboutScroll + aboutMargin - windowHeight)){
    $("li").removeClass('active');
  }
  if (windowScroll > (aboutScroll + aboutMargin - windowHeight)){
    $("li:first").addClass('active');
    $("li:nth-child(2)").removeClass('active');
  }
  if (windowScroll > (portfolioScroll + portfolioMargin - windowHeight)){
    $("li:first").removeClass('active');
    $("li:nth-child(2)").addClass('active');
    $("li:nth-child(3)").removeClass('active');
  }
  if (windowScroll > (channelScroll + channelMargin - windowHeight)){
    $("li:nth-child(2)").removeClass('active');
    $("li:nth-child(3)").addClass('active');
    $("li:nth-child(4)").removeClass('active');
  }
  if (windowScroll > (contactScroll + contactMargin - windowHeight)){
    $("li:nth-child(3)").removeClass('active');
    $("li:nth-child(4)").addClass('active');
  }
});
 
   

   