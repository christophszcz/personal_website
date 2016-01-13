$(window).scroll(function() {
  var aboutScroll = $('#about-scroll').offset().top,
  margin = $('#about-scroll').outerHeight(),
  portfolioScroll = $('#portfolio-scroll').offset().top,
  channelScroll = $('#channel-scroll').offset().top,
  contactScroll = $('#contact-scroll').offset().top,

  windowHeight = $(window).height(),
  windowScroll = $(this).scrollTop();
  if (windowScroll < (aboutScroll + margin - windowHeight)){
    $("li").removeClass('active');
  }
  if (windowScroll > (aboutScroll + margin - windowHeight)){
    $("li:first").addClass('active');
    $("li:nth-child(2)").removeClass('active');
  }
  if (windowScroll > (portfolioScroll + margin - windowHeight)){
    $("li:first").removeClass('active');
    $("li:nth-child(2)").addClass('active');
    $("li:nth-child(3)").removeClass('active');
  }
  if (windowScroll > (channelScroll + margin - windowHeight)){
    $("li:nth-child(2)").removeClass('active');
    $("li:nth-child(3)").addClass('active');
    $("li:nth-child(4)").removeClass('active');
  }
  if (windowScroll > (contactScroll + margin - windowHeight)){
    $("li:nth-child(3)").removeClass('active');
    $("li:nth-child(4)").addClass('active');
  }
});
 
   

   