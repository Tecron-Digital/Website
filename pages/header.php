
<?php


?>
<header id="transpage" class="sticky">

<div class="logo">
    <img src="../img/LOGO_main.png">
</div>

<nav>

<ul>

<?php
$home = "";
$contact  = "";
$about = "";
$blog = "";
$portfolio = "";
if(isset($page)){

switch($page){
case "home";
$home = "active";
break;
case "contact";
$contact = "active";
break;
case "about";
$about = "active";
break;
case "blog";
$blog = "active";
break;
case "portfolio";
$portfolio = "active";
break;


}

}


?>

<a href="../index.php" class="<?php echo $home ?>">Home</a>
<a href="contact.php" class="<?php echo $contact ?>">Contact</a>
<a href="about.php" class="<?php echo $about ?>">About</a>
<a href="#" class="<?php echo $portfolio ?>">Portfolio</a>
<a href="blog.php" class="<?php echo $blog ?>">Blog</a>


</ul>


</nav>
<div id="bar" onclick="togglebar()">
    <div class="baritem"></div>
    <div class="baritem"></div>
    <div class="baritem"></div>
    
    
    </div>
</header>

