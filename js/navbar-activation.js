  var activeItemAbout = document.getElementById("identity0");
  var activeItemPortfolio = document.getElementById("identity1");
  var activeItemChannel = document.getElementById("identity2");
  var activeItemContact = document.getElementById("identity3");
  
  function removeBlack(){
    if (activeItemAbout.classList.contains("active")) {
      activeItemAbout.classList.remove("active");
    }
    if (activeItemPortfolio.classList.contains("active")) {
      activeItemPortfolio.classList.remove("active");
    }
    if (activeItemChannel.classList.contains("active")) {
      activeItemChannel.classList.remove("active");
    }
    if (activeItemContact.classList.contains("active")) {
      activeItemContact.classList.remove("active");
    }
  };

  function addActive(num) {
    removeBlack();  
    var navbarItem = document.getElementsByTagName("li")[num];
    navbarItem.className = navbarItem.className + " active";
  };

   