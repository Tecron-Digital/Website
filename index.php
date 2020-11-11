<?php


include "includes/db_connect.php";

$query = "SELECT * FROM posts ORDER BY ID DESC;";
$returned = mysqli_query($userConnect,$query);



?>

<!DOCTYPE HTML>
<html>
<head>

    <title>Tecron Digital Services</title>
<link rel="stylesheet" href="css/style.css">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="css/responsive.css">
 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />

  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<header>

<div class="logo">
    <img src="img/LOGO_main.png">
</div>

<nav>

<ul>
<a href="index.php" class="active">Home</a>
<a href="pages/contact.php">Contact</a>
<a href="pages/about.php">About</a>
<a href="#">Portfolio</a>
<a href="pages/blog.php" class="SpecialNav">Blog</a>


</ul>

</nav>
<div id="bar" onclick="togglebar()">
        <div class="baritem"></div>
        <div class="baritem"></div>
        <div class="baritem"></div>
        
        
        </div>
</header>

<section class="top-img-cover">
<div id="socialIcons">
<a href="https://www.facebook.com/tecrondigital"> <div class="side-img" style="background-color:#3578e5"><img src="img/facebook.svg"></div></a>
<a href="#"> <div class="side-img" style="background-color:#1DA1F2"> <img src="img/twitter.svg"></div></a>
<a href="#"> <div class="side-img" style="background-color:#25D366;"><img src="img/whatsapp.svg"></div></a>
<a href="https://wa.me/message/BZUA3RPMGIF6H1">  <div class="side-img" style="background-color:#0a85d9;"><img src="img/telegram.svg"></div></a>
<a href="https://t.me/TecronDigital"> <div class="side-img" style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); ""><img src="img/instagram.svg"></div></a>
    


</div>

<Br>
<div class="welcomeMsg">Welcome to <span>Tecron Digital Services</span>
<br>
<div class="innermsg">Your Digital One-Stop</div><br><Br>
<div class="explore">Explore<a href="#solutions"><img src="img/downwardPointer.svg"/></a></div>
</div>


</section>

<!------Modal-box section---------->
<div class="modal-box">
    <img src="img/close.svg" id="close" onclick="Javascript:togglemodal()" />
<div class="modal-title"><br><h2>Subscribe to our weekly newsletter<br><br></h2>For the best Tech updates and gists directly to your mail</div>    
<div id="newsletter-modal">

<form onsubmit="return sendEmail()" id="modalform" >
<input type="email" placeholder="Your-Email Here" name="newsletterEmail" />
<br>
<center>
<button type="submit" >Subscribe</button></center>
</form>
</div>
</div>

<!-------Randomized pop up-->
<div id="popup" class="modal-box">
  
<h2></h2>For the best Tech updates and gists directly to your mail
 <div></div>


</div>







<!------Solutions-Section---------->
<section id="solutions">
<div class="ftredimg"><img src="img/background/background4.jpg"></div>


<div class="solution">
Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Modi quo voluptate, fuga adipisci odio accusantium facere, provide
 nt mollitia tempora similique voluptates optio harum excepturi nat
 us suscipit culpa nihil explicabo numquam dignissimos, reprehender
 it nulla! Perferendis ducimus ullam earum optio quos distinctio
<div id="text-span">




</div>
<div id="typeeffect">
<p></p>
<p>
    Are you <br>
    -A Good <bold>writer</bold> looking to get an audience through a blog,<br>
    -A business <bold>Admin</bold> looking to expand your business,<br>
    -Are you part of a <bold>Startup</bold> looking for an identity,<br>
    -An <bold>affiliate marketer</bold> looking to grow your network of buyers,<br>
    -A <bold>YouTuber</bold> looking to gain more subscribers,<br>
    

</p>

<p>

We've got you covered

</p>

</div>

</div>

</section>



<!------------------------Services------------------------------------------->
<section id="services">
<br>
    <h2>Our Services</h2>
<div class="serviceSlideShow">
<div class="sliderHolder">
<div class="service">
    
<img src="img/webdev.png"/><br>
Web Design and Development</div>
<div class="service">
<img src="img/photoshop.png"/><br>
Photo Editing Filter and Correction</div>
<div class="service">Logo and Banner Design</div>
<div class="service">
<img src="img/flyer.jpg"/>    <br>
Business Cards and Flyer Design</div>
<div class="service">
    <img src="img/audio.png"/><br>
    Audio and Video Transcription</div>
<div class="service">
    <img src="img/video.png"/><br>
    Video and Audio Editing</div>


</div>


</div>



</section>


<section id="order">
<br>
<h1>All sounds good doesn't it</h1>
<a href="pages/contact.php">
<button>Place your order Now!</button>
</a> 



</section>

<section id="featuredPosts">
<h2>Recent Articles</h2>


<?php 

$count = 0;

while($row = mysqli_fetch_assoc($returned) AND $count < 3 ){ 
    $count ++ ;
    
    ?>
    <div class="blogPost homeFeatured">
    <div class="postImg"><img src="uploads/<?php echo $row['featured_image']?> "></div>
    <div class="postTitle"><?php echo $row["title"]; ?> </div>
    
    <div class="postBody"><?php
    $str = $row['body'] ;
    if(strlen($str) > 50){
       
        
        $str = substr($str,0,50);
        echo "$str" . "..." ?><a href="pages/post.php?id=<?php echo $row["id"]; ?>">Read more</a> <?php
        
          }  
          else{
              echo $str;
          }
        
     ?></div>
     <div class="postCategory">-<?php echo $row["category"]; ?></div>
     <div class="postDate"><?php echo $row["date"]; ?></div> 
    </div>
   
    
    
    </div>

    <?php }; ?>


</section>

<footer>
<div class="details-cover">
<div id="footer-about">
<h2>About Us</h2>
First-class Digital Co-operation
Web and Graphics Agency
</div>

<div id="footer-links">
    <h2>
Important Links

    </h2>
    <ul>
          <a href="index.php"><i class="fa fa-home"> </i>  Home</a>
        <a href="pages/contact.php"><i class="fa fa-address-book"></i>  Contact</a>
        <a href="pages/about.php"><i class="fa fa-user"></i>  About</a>
        <a href="#"><i class="fa fa-book"></i>  Portfolio</a>
        <a href="pages/blog.php"><i class="fa fa-feed"> </i>  Blog</a>
        
        
        </ul>

</div>

<div id="contact-links">

    <h2>Contact Us</h2>
<ul>

    <li><i class="fa fa-envelope"></i>
E-mail : TecronDigitalServices@gmail.com</li><br>
    <li><a href="tel:+2348071528567"><i class="fa fa-phone"></i>  Phone : +2348071528567</a></li>

</ul>


</div>

</div>
<div id="newsletter">
<h1>Subscribe To Our Newsletter</h1>
<form onsubmit="return sendEmail()">
<input type="email" placeholder="Your-Email Here" name="email" />
<button type="submit">Submit</button>
</form>
</div>
<br>
<p>Follow Us On</p>
<div id="socialIcons-footer">
    <div style="background-color:#3578e5"><a href="https://www.facebook.com/tecrondigital"><img src="img/facebook.svg" ></a></div>
    <div  style="background-color:#1DA1F2"><a href="#"><img src="img/twitter.svg" ></a></div>
    <div  style="background-color:#25D366;"><a href="https://wa.me/message/BZUA3RPMGIF6H1"><img src="img/whatsapp.svg"></a></div>

    

</div>

<div class="line"></div>
<Br>
    

    <div class="copy">Copyright © Tecron Digital Services</div>


</footer>
<script src="js/header.js"></script>
<script src="js/slider.js"></script>
<script src="js/scroll-out.js"></script>
<script src="js/ajax.js"></script>
<script src="js/typed.js"></script>
<script>
ScrollOut({
targets : ".welcomeMsg,.blogPost";


})

</script>




</body>


</html>