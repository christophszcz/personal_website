$(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});

$(".navbar-brand").on("click", function(){
   $(".nav").find(".active").removeClass("active");
});