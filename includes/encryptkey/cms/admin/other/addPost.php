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

<section class="create">
<h2>Create Post</h2>


<div id="modal-box">

<button onclick="togglemodal()">X</button>
<h2>Uploads</h2>
<div id="imagehold">
<?php
include "showgallery.php";
?>
</div>
<br><Br>
<form id="addimgform"  onsubmit="return upload()" method="POST" enctype="multipart/form-data">

<input type="file" name="featuredimage" placeholder="UploadImage" />
<span id="return"></span>
<button type="submit">Upload New Image</button>

</form>



</div>

<form onsubmit="return validate()" action="action.php"  method="POST" enctype="multipart/form-data" >

<input type="text" id="title" name="postTitle" placeholder="  Title">
<input type="hidden" name="request" value="add_post"/>


<textarea name="postBody" placeholder="    Body" id="body">
</textarea>
<select name="category">
<option>Mobile Phones and computing</option>
<option>Tackle</option>
<option>Mad</option>
<option>OWK</option>
<option>Mad</option>


</select>
<br>
<button type="button" onclick="Javascript:togglemodal()">Add Image</button>
<input type="text" id="Author" name="postAuthor" placeholder="    Author's Name" /> 
<input type="file" name="featuredimage" placeholder="Featured Image" />
<br>

<div id="warning"></div>
<center><button type="submit"> CREATE</button></center>






</form>




</section>

<script src="validate.js">
    

</script>



</body>

</html>
