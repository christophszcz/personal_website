 
$(document).ready(function(){
  $('.nav li a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
}); 

var captionLength = 0;
var caption = '';


$(document).ready(function() {
  setInterval ('cursorAnimation()', 600);
  captionEl = $('#caption');
  
  $('#test-typing').click(function(){
      testTypingEffect();
  });

  $('#test-erasing').click(function(){
      testErasingEffect();
  });
});

function testTypingEffect() {
  caption = $('input#user-caption').val();
  type();
}

function type() {
  captionEl.html(caption.substr(0, captionLength++));
  if(captionLength < caption.length+1) {
      setTimeout('type()', 50);
  } else {
      captionLength = 0;
      caption = '';
  }
}

function testErasingEffect() {
  caption = captionEl.html();
  captionLength = caption.length;
  if (captionLength>0) {
      erase();
  } else {
      $('#caption').html("You didn't write anything to erase, but that's ok!");
      setTimeout('testErasingEffect()', 1000);
  }
}

function erase() {
  captionEl.html(caption.substr(0, captionLength--));
  if(captionLength >= 0) {
      setTimeout('erase()', 50);
  } else {
      captionLength = 0;
      caption = '';
  } 
}

function cursorAnimation() {
  $('#cursor').animate({
      opacity: 0
  }, 'fast', 'swing').animate({
      opacity: 1
  }, 'fast', 'swing');
}  