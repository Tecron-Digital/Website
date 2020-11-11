var title = document.querySelector("#title");
var body = document.querySelector("#body");
var category = document.querySelector('select');
var modalbox = document.getElementById("modal-box")
var isModalOpen = false;
var warning = document.querySelector("#warning")
function validate(){

if( title.value == "" || body.value == "" || options.value == "" ){
warning.innerHTML="You have not completed one or more of the fields"

return false
}

else if(title.value.length >=129 ){
    warning.innerHTML="Title is too long"
return false
}
else{

    return true
}

}





 function togglemodal(){
if(isModalOpen == false){
isModalOpen = true;
modalbox.style.display = "block"

}

else{
isModalOpen = false;
modalbox.style.display = "none"

}
console.log(isModalOpen)


}


function addImage(url){
    var mainurl = url.substring(12);
var one = '<img src="';
var two = '" />'
body.value+=one + mainurl +two
togglemodal()


}



////Ajax upload Section


var imageHold = document.querySelector("#imagehold");
var returnBox = document.querySelector("#return");

function upload(){


    var email = document.querySelector('#addimgform input').value;

    var form  = document.querySelector("#addimgform");
        var xhttp = new XMLHttpRequest();
    
        var data = new FormData(form)
        returnBox.innerHTML="Uploading..."
    xhttp.onload = function(){
    returnBox.innerHTML = this.responseText;
refreshGallery()


    }
    
    xhttp.open(form.method, "action.php/?request=upload_gallery", true);
    

    xhttp.send(data); 
    

    return false;
    
    
    
    
    }
function refreshGallery(){
    var xhr = new XMLHttpRequest();
    xhr.open("POST","showgallery.php",true);
xhr.send();

xhr.onload = function(){
imageHold.innerHTML=this.responseText;

}

}


    function deleteImg(url){

        var xhttp = new XMLHttpRequest();

        xhttp.open("POST","action.php?request=del_img",true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("url="+url+"");

        xhttp.onload=function(){
refreshGallery()
returnBox.innerHTML = this.responseText
            
        }


    }


