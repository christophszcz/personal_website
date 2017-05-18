$(function(){
  $('a[href^="#"]').click(function(e){
    var target = $(this).attr('href');
    var strip = target.slice(1);
    var anchor = $("a[name='" + strip + "']");

    e.preventDefault();
    $('html, body').animate({
      scrollTop: anchor.offset().top
    }, 'slow');
  });
});
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
 
   

   
(function($) {
  $.fn.writeText = function(content) {
    var contentArray = content.split(""),
      current = 0,
      elem = this;
    setInterval(function() {
      if(current < contentArray.length) {
        elem.text(elem.text() + contentArray[current++]);
      }
    }, 150);
  };
})(jQuery);

$("#typing-text-first").writeText("Hi there, my name is Christopher... and I <3 programming.");
