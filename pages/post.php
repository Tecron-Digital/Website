

<!DOCTYPE HTML>
<html>
<head>

    <title>Tecron Digital Services</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/responsive.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<style>
body{
background-color:rgb(0,0,0,0.01);

}
    </style>
</head>
<body>
    
<?php
require_once "header.php";

   ?>



<?php
require_once "icons.php";

?>
<br>
<section id="mainpost">
<?php
include "../includes/db_connect.php";

if(isset($_GET['id'])) {
$id = $_GET['id'];

}
else{


$id=null;
exit("<center><h2>404 NOT FOUND</h2><br><a href='../index.php' style='text-decoration:none;color:#0042b3'>Return Home</a></center>");

};


$query = "SELECT * FROM posts WHERE ID=$id;";
$returned = mysqli_query($userConnect,$query);

    $result = mysqli_num_rows($returned);





?>

<?php
if($result > 0){
while($row = mysqli_fetch_assoc($returned)){ ?>


<div class="title"><h2><?php echo $row['title'] ?></h2></div>
<div class="featuredImg"><img src="../uploads/<?php echo $row['featured_image'] ?>" alt="" ></div>
    
<Br><Br>
<div class="author"><span>Written By </span> <?php 

 echo $row['author'];

 ?></div>
<div class="time">Posted <?php echo $row['date'] ?></div>
<div class="body">

<?php echo $row['body'] ?>
</div>

<span id="post-share">Share On
<br><br><br>
<a href="https://www.facebook.com/sharer.php?u=https://localhost/pages/post.php?=<?php echo $row['id'] ?>"><img src="../img/facebook.svg" style="background-color:#3578e5"></a>

<a href="https://twitter.com/intent/tweet?url=<?=urlencode("https://localhost/pages/post.php?=".$row['id'] )?>"><img src="../img/twitter.svg"  style="background-color:#1DA1F2";></a>
<img src="../img/whatsapp.svg" style="background-color:#25D366;">

</span>

<?php } ;


}
else{
    echo "<h2><center>ERROR 404 PAGE NOT FOUND</center> </h2>";
    exit();
    }


?>
</section>
<br>

<section class="moreArticles">
<br>
<h2>More Articles For You</h2>

<?php 

$post1 = $id - 2;
$post2 = $id - 1;
$post3 = $id + 1;

$query = "SELECT * FROM posts WHERE ID IN($post1,$post2,$post3) ORDER BY ID DESC;";
$returned = mysqli_query($userConnect,$query);


while($row = mysqli_fetch_assoc($returned)){ 
    
  
    ?>
<div class="blogPost">

    
    <div class="postImg"><img src="../uploads/<?php echo $row['featured_image']?> "></div>
    <div class="postTitle"><?php echo $row["title"]; ?> </div>
    
    <div class="postBody"><?php
    $str = $row['body'] ;
    if(strlen($str) > 50){
       
        
        $str = substr($str,0,50);
        echo "$str" . "..." ?><a href="post.php?id=<?php echo $row["id"]; ?>">Read more</a> <?php
        
          }  
          else{
              echo $str;
          }
          ?>
          </div>
          </div>
          <?php
        }
        
     ?>
  



</section>


<?php

require_once "footer.php";


?>

</body>


</html>