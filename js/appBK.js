var main = function() {

  //Menu Bar Open
  $('.icon-hamburger').click(function() {
    $('.menu').animate({
      left: "0px"
    }, 300);

    $('body').animate({
      left: "285px"
    }, 300);
      
     
      
      
      $(".icon-hamburger").rotate({
      duration:500,
      angle: 0,
      animateTo:90
      });
     
      $(".closeAll").css("display", "block");
       e.stopPropagation();
      
      
  });

  // Close both Search and Menu 
  $('.icon-close').click(function() {
    $('.menu').animate({
      left: "-285px"
    }, 200);

    $('body').animate({
      left: "0px"
    }, 200);
      
      
    $(".icon-hamburger").rotate({
      duration:400,
      angle: 90,
      animateTo:0
      });
      
    
    $('.searchBar').animate({
      top: "-10em"
    }, 200);

    $('body').animate({
      top: "0em"
    }, 200);
      
      
    $(".icon-search").rotate({
      duration:400,
      angle: 90,
      animateTo:0
      });
      
      $(".closeAll").css("display", "none");
      
  });
    
    
   //Search Bar Open
    
    $('.icon-search').click(function() {
    $('.searchBar').animate({
      top: "0em"
    }, 200);

    $('body').animate({
      top: "2em"
    }, 200);
      
      
      $(".icon-search").rotate({
      duration:500,
      angle: 0,
      animateTo:90
      });
          
    $(".closeAll").css("display", "block");
            
          
  });
    
    //CloseAll Click
    
    $('.closeAll').click(function() {

          
    $('.menu').animate({
      left: "-285px"
    }, 200);

    $('body').animate({
      left: "0px"
    }, 200);
      
      
    $(".icon-hamburger").rotate({
      duration:400,
      angle: 90,
      animateTo:0
      });
      
    
    $('.searchBar').animate({
      top: "-10em"
    }, 300);

    $('body').animate({
      top: "0em"
    }, 100);
      
      
    $(".icon-search").rotate({
      duration:400,
      angle: 90,
      animateTo:0
      });
          
    $(".closeAll").css("display", "none");
            
          
  });

    
};


if(("standalone" in window.navigator) && window.navigator.standalone){

var noddy, remotes = false;

document.addEventListener('click', function(event) {

noddy = event.target;

while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
noddy = noddy.parentNode;
}

if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
{
event.preventDefault();
document.location.href = noddy.href;
}

},false);
}


$(function() {
    FastClick.attach(document.body);
});



$(document).ready(main);

