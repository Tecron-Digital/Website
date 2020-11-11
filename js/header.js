var nav =  document.querySelector("header nav");
var bar = document.getElementById("bar");

window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.querySelector("header");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.scrollY >= sticky) {
    navbar.className="sticky"
  } 
    if(window.scrollY == 0){
        
        navbar.className= ""
    }
    
}

function togglebar(){
  if(bar.className=="active"){
      nav.className="";
      bar.className="";
  
  
  
  }
  else{
      nav.className="active";
      bar.className="active";
  
    
      
  }
  }

  
  function createAlert(title,body,duration){
    var popup = document.querySelector('#popup');
var popuptitle = document.querySelector('#popup h2');
var popupbody = document.querySelector('#popup div');



popuptitle.innerHTML = title;
popupbody.innerHTML = body;
popup.className="active";

setTimeout(function(){
popup.className="";



},duration)



  }