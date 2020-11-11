

var modalBox = document.querySelector(".modal-box");

function sendEmail(){


    var email = document.querySelector('#modalform input').value;
        var xhttp = new XMLHttpRequest();
        var sendstring = "email="+email+"";
    

    modalBox.innerHTML = "<center><br><h2>Loading...</h2><br><br><img id='loadingimg' src='img/loading.png'></center>";
    
    xhttp.onload = function(){
    modalBox.innerHTML = "<br<br><br><br><span>"+ this.responseText + "</span>";
setTimeout(togglemodal,700);
    }
    
    xhttp.open("POST", "includes/registerNewsLetter.php", true);
    
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + email + ""); 
    

    return false;
    
    
    
    
    }

    function sendMessage(){
        var form = document.querySelector("#msgform");
        var submitbtn = document.querySelector("#sendmsg")
        var name = document.querySelector("#name").value;
        var email = document.querySelector("#email").value;
        var phone = document.querySelector("#phone").value;
 var message = document.querySelector("form textarea").value;
        var xhttp = new XMLHttpRequest();
        var sendstring = "name="+name+"&phone="+phone+"&request="+message+"& key=56gf &email="+email;
    
submitbtn.innerHTML="Sending..."
    
    xhttp.onload = function(){
  createAlert("Message Sent","We will contact you shortly",4000)
  form.reset();
  submitbtn.innerHTML = "Send Message"

  
    }
    
    xhttp.open("POST", "../includes/sendemail.php", true);
    
    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(sendstring); 
    

    return false;

    }