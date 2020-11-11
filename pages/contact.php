<!DOCTYPE HTML>
<html>
<head>

    <title>Tecron Digital Services</title>
<link rel="stylesheet" href="../css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />

  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/responsive.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    
<?php
$page = "contact";
require "header.php";

   ?>

<?php
require_once "icons.php";

?>

<Br>
    <h2 class="pageheading">Contact Us</h2>
    
    <!-------Randomized pop up-->
<div id="popup">
  
  <h2></h2>
   <div></div>
  
  
  </div>
  
  
  
  
  
<section class="contactarea">

<section class="contExplain">
        <h2>Come on Place your order :) Let's talk</h2>
        
        <div class="cont-body">
You need something,We got something with our 24/7 service we can process and deliver your orders in minmal times and rates.<br>
Why trust us?
<ol>
<li>100% reliable</li>
<li>100% available</li>
<li>No risk involved</li>
<li>Easy to bargain</li>
</ol>


<div id="socialIcons-contact">
    <div style="background-color:#3578e5"><a href="https://www.facebook.com/tecrondigital"><img src="../img/facebook.svg" ></a></div>
    <div  style="background-color:#1DA1F2"><a href="#"><img src="../img/twitter.svg" ></a></div>
    <div  style="background-color:#25D366;"><a href="https://wa.me/message/BZUA3RPMGIF6H1"><img src="../img/whatsapp.svg"></a></div>
    <div  style="background-color:#0a85d9;"><a href="https://wa.me/message/BZUA3RPMGIF6H1"><img src="../img/telegram.svg"></a></div>
    <div  style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); "><a href="https://wa.me/message/BZUA3RPMGIF6H1"><img src="../img/instagram.svg"></a></div>
    

</div>

<p>Need something </p>

<ul style="list-style-type: none;">
<li><i class="fa fa-envelope"></i> Support@tecrondigital.com</li>
<li><i class="fa fa-phone"></i>Call : +234 8071528567</li>



</ul>
        </div>
        </section>

    <form id="msgform" onsubmit="return sendMessage()">
<center><img src="../img/logo_black.png"></center>
<input type="text"id="name" name="name" placeholder="Your Name here" required>
<input type="email" id="email" name="email" placeholder="Your E-mail Address" required>
<input type="text" id="phone" name="phone" placeholder="Your Phone Number" required>
<textarea name="request" placeholder="Your Message request" required></textarea>
<br>
<center><button id="sendmsg" type="submit">Send Message</button></center>

    </form>


   


</section>



<?php

require_once "footer.php"


?>


</body>


</html>