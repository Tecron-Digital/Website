<?php
include "../includes/db_connect.php";

?>

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
$page = "blog";
require "header.php";

   ?>


<?php
require_once "icons.php";

?>
<?php 

$query = "SELECT * FROM posts ORDER BY ID DESC;";
$returned = mysqli_query($userConnect,$query);

?>
<br>

<h2 class="pageheading">Blog Posts

<div id="blogsearch">
<input type="search" id="searchValue" name="postsearch" placeholder="   Search for an article...."/>
<i id="searchBtn" class="fa fa-search" onclick="Javascript:returnsearch()"></i>
</div>
</h2>

<section id="allPosts">

<?php while($row = mysqli_fetch_assoc($returned)){ ?>
    <div class="blogPost">
        <div class="postImg"><img src="../uploads/<?php echo $row['featured_image']?> "></div>
    <div class="postTitle"><?php echo $row["title"]; ?> </div><br><Br>
    
    <div class="postBody"><?php
    $str = $row['body'] ;
    if(strlen($str) > 50){
       
        
        $str = substr($str,0,50);
        echo "$str" . "..." ?><a href="post.php?id=<?php echo $row["id"]; ?>">Read more</a> <?php
        
          }  
          else{
              echo $str;
          }
        
     ?></div>
     <div class="postCategory">-<?php echo $row["category"]; ?></div>
    <div class="postDate"><?php echo $row["date"]; ?></div>
    
    
    </div>

    <?php }; ?>


</section>


<?php

require_once "footer.php"


?>

<script src="../js/scroll-out.js"></script>
<script src="../js/searchpost.js"></script>

<script>

ScrollOut({
targets : ".blogPost"


})
</script>

</body>


</html>