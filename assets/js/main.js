//Adaptive Menu
function openMenuBar() {
  document.getElementById("top_nav").style.height = "100%";
  var x = document.getElementsByClassName("openbtn");
  var i;
  for (i = 0; i < x.length; i++) {
      x[i].style.display = 'none';
  }
  document.body.style.overflow="hidden";
}
function closeMenuBar() {
  document.getElementById("top_nav").style.height = "0";
  var x = document.getElementsByClassName("openbtn");
  var i;
  for (i = 0; i < x.length; i++) {
      x[i].style.display = 'block';
  }
  document.body.style.overflow="scroll";
}
//Return To Top Btn
window.addEventListener('scroll', scrollFunction);
function scrollFunction() {
  var rtnBtn = document.getElementById("returnBtn"); 
  var pixels = document.body.scrollTop;
  var safPixels = document.documentElement.scrollTop;
  if (pixels > 300 || safPixels > 300) {
    rtnBtn.style.display = "block";
  } else {
    rtnBtn.style.display = "none";
  }
}
function topFunction() {
  window.scrollTo({top: 0, behavior: 'smooth'});
}

window.addEventListener('resize', menuWidthChange);
function menuWidthChange(){
  let menu = document.getElementById("top_nav");
  let screenWidth = window.screen.width;
  if (screenWidth >= 750){
    menu.style.width = "100%";
  }
}

//Side Bar
function opensidebar() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "0px";
  var x = document.getElementsByClassName("openbtn");
  var i;
  for (i = 0; i < x.length; i++) {
      x[i].style.display = 'none';
  }
}
function closesidebar() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  var x = document.getElementsByClassName("openbtn");
  var i;
  for (i = 0; i < x.length; i++) {
      x[i].style.display = 'block';
  }
}
//Sliders
$(document).ready(function(){
  
  $(".owl-slider1").owlCarousel({
    nav: true,
    items: 1, 
    loop: true,
    merge:true,
    responsive:{
      300:{
          mergeFit:true
      },
      1000:{
          mergeFit:false
      }
    }
  });
  
  $(".owl-slider2").owlCarousel({
    nav: false,
    margin: 20,
    slideBy: 3,
    items: 3,
    responsiveClass:true,
    responsive : {
      0 : {
        slideBy: 1,
        items: 1,
      },
      750 : {
        slideBy: 3,
        items: 3,
      }
    }

  });

  $(".owl-slider3").owlCarousel({
    nav: false,
    margin: 20,
    slideBy: 3,
    items: 3,
    //merge: true,
    responsiveClass:true,
    responsive : {
      
      0 : {
        slideBy: 1,
        items: 1,
      },
      380 : {
        slideBy: 1,
        items: 1,
        
      },
      750 : {
        slideBy: 3,
        items: 3,
      }
    }
  });

  $(".owl-slider4").owlCarousel({
    nav: true,
    margin: 20,
    slideBy: 2,
    items: 2,
    responsiveClass:true,
    responsive : {
      
      0 : {
        slideBy: 1,
        items: 1,
        
      },
      380 : {
        slideBy: 1,
        items: 1,
        
      },
      750 : {
        slideBy: 2,
        items: 2,
        
      }
    }
  });

});
