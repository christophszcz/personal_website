 
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

// function fadein(){
//             $('#p-item1').click(function() { bootbox.alert('<img src="./img/portfolio/SundayNightEntertainment.png" height="388px" width="800px"><h4>Dog ipsum dolor sit amet</h4>'); });
//             $('#p-item2').click(function() { bootbox.alert('<img src="./img/portfolio/Task_Hackr.png" height="388px" width="800px"><h4>Cat ipsum dolor sit amet</h4>'); });
//             $('#p-item3').click(function() { bootbox.alert('<img src="./img/portfolio/UofTAnatomyDatabook.png" height="388px" width="800px"><h4>Bird ipsum dolor sit amet</h4>'); });
//             $('#p-item4').click(function() { bootbox.alert('<img src="./img/portfolio/WillemandJools.png" height="388px" width="800px"><h4>Dog ipsum dolor sit amet</h4>'); });
//             $('#p-item5').click(function() { bootbox.alert('<img src="./img/portfolio/ChefBen.png" height="388px" width="800px"><h4>Cat ipsum dolor sit amet</h4>'); });
//         }
//     var $itemsHolder = $('.col-md-4.span3');
//     var $itemsClone = $itemsHolder.clone(); 
//     var $filterClass = "";
//     $('ul.filter li').click(function(e) {
//     e.preventDefault();
//     $filterClass = $(this).attr('data-value');
//         if($filterClass == 'all'){ var $filters = $itemsClone.find('.span3'); }
//         else { var $filters = $itemsClone.find('li[data-type='+ $filterClass +']'); }
//         $itemsHolder.quicksand(
//           $filters,
//           { fadein: 1000 },
//           gallery
//           );
//     });
//     $(document).ready(fadein); 
 
