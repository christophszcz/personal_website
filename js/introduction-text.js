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
