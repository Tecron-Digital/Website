<?php

session_start();

if(isset($_SESSION['Logged in'])){



}

else{
    header("Location:../../admin-login.php");
exit();

}

?>


<!DOCTYPE html>
<html>
<head>
<title>Tecron Digital Services - Admin</title>


<link rel="stylesheet" href="../style.css"/>
</head>

<body>


<div class="sidebar">
    <img src="../../../../../img/LOGO_GOLD.png">
    <br><Br><br><br>
<ul>

<li><a href="../index.php">Dashboard</a></li>
<li><a href="addPost.php">Create Post</a></li>

<li><a href="addPortfolio">Add portfolio Item</a></li>
<li><a href="/addreview">Add Review</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="content.php">Site Content</a></li>
<li><a href="settings.php">Settings</a></li>
<li><a href="logout.php">Logout</a><li>


</ul>


</div>

<section class="content">
<h2>Edit Site Content</h2>

<h1>About Info</h1>
<form>
<textarea name="newContent">
<?php 
$prev = readfile("../documents/about.txt");
echo $prev;

?>


</textarea>
<center><button type="submit">Update</button></center>
</form>


<h1></h1>
<form>
<textarea name="newContent">
<?php 
$prev = readfile("../documents/about.txt");
echo $prev;

?>


</textarea>
<center><button type="submit">Update</button></center>
</form>


</section>

<script src="validate.js">
    

</script>



</body>

</html>
