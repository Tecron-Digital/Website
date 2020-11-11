var sliderHolder = document.querySelector(".sliderHolder");
var sliderPosition = 0;
var cutvalue = 50;

//in seconds
var skiptime = 5
//
setInterval(next,skiptime*1000)
function next(){
    if(sliderPosition>=250){

sliderPosition=0
    }
    else{
sliderPosition+=cutvalue
    }

updateslider()
}


function previous(){

    if(sliderPosition<=0){
sliderPosition=300;

    }
    else{
sliderPosition-=cutvalue
    }
updateslider()
}

function updateslider(){
    console.log(sliderPosition);
sliderHolder.style.marginLeft = -(sliderPosition) + "%";

}

var isModalOpen = false;
var modal = document.querySelector(".modal-box");
var body = document.querySelector("*");

setTimeout(togglemodal,5000);

  function togglemodal(){
if(isModalOpen == false){
  modal.style.display = "block"
  modal.style.animationPlayState="running";
  isModalOpen = true;
}
else{

modal.style.animationName="fadeOutDown";
modal.style.animationDuration="0.7s";
modal.style.animationIterationCount="1";
modal.style.animationPlayState="running";
setTimeout(function(){

    modal.style.display = "none";
},600)


}
  }








