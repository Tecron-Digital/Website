<?php

include "../../../db_connect.php";

session_start();

if(isset($_SESSION['Logged in'])){



}

else{
    header("Location:../admin-login.php");
exit();

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tecron Digital Services - Admin</title>


<link rel="stylesheet" href="style.css"/>
</head>

<body>

<?php

$query = "SELECT * FROM posts ORDER BY ID DESC;";
$result = mysqli_query($userConnect,$query);



?>

<div class="sidebar">
    <img src="../../../../img/LOGO_GOLD.png">
    <br><Br><br><br>
<ul>

<li><a href="index.php">Dashboard</a></li>
<li><a href="other/addPost.php">Create Post</a></li>

<li><a href="#">Add portfolio Item</a></li>
<li><a href="#">Add Review</a></li>
<li><a href="other/gallery.php">Gallery</a></li>
<li><a href="other/content.php">Site Content</a></li>
<li><a href="other/settings.php">Settings</a></li>
<li><a href="other/logout.php">Logout</a><li>


</ul>


</div>

<section>
<h1>

Welcome, <?php echo $_SESSION['real name']; ?>

</h1>

<h1> Admin Status : <?php echo $_SESSION['status']; ?>   </h1>
<h2>All Posts</h2>


<div class="postview special">
    <div class="postid">Post ID</div>
    <div class="posttitle">Title</div>
    <div class="postbody">Body</div>
    <div class="postdate">Date</div>

</div>


<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="postview">
<div class="postid"> <?php echo $row["id"]  ?> </div>
<div class="posttitle"><?php echo $row["title"]  ?></div>
<div class="postbody"><?php 
 $str = $row['body'] ;
 if(strlen($str) > 50){
    
     
     $str = substr($str,0,50);
     echo "$str" . "..." ;
     
       }  
       else{
           echo $str;
       }

?></div>
<div class="postdate"><?php echo $row["date"]  ?></div>

<a href="other/action.php?request=del_post&id=<?php echo $row['id']?>"><button class="deletepostBtn">Delete</button></a>


</div>

<?php } ?>


</section>


</body>

</html>
