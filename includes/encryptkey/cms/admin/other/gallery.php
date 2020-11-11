<?php

include "../../../../db_connect.php";

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


<style>
    h2{
padding:30px;
background-color:#141414;
color:white;
position: fixed;
display: block;
width:90%;
z-index:100;

    }
#imagehold{


}
#imagehold div.imageBar{
display:inline-block;

margin:0;
max-width:30%;
min-width:10%;
max-height:20%;
min-height:10%;
border:4px solid gold;
transition:0.5s;

}
#imagehold div.imageBar img{
    height:100%;
    width:100%;
}

#imagehold div.imageBar:hover{
border:2px solid #0042b3;
cursor:pointer;
opacity:0.5;

            }


#addimgform{
top:0;
bottom:0;
position:relative;
border-top:2px solid white;

}

</style>
</head>

<body>



<div class="sidebar">
    <img src="../../../../../img/LOGO_GOLD.png">
    <br><Br><br><br>
<ul>

<li><a href="../index.php">Dashboard</a></li>
<li><a href="addPost.php">Create Post</a></li>

<li><a href="#">Add portfolio Item</a></li>
<li><a href="#">Add Review</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="settings.php">Settings</a></li>
<li><a href="logout.php">Logout</a><li>


</ul>


</div>


<section>
<h2>Upload Gallery<br>
    <form id="addimgform"  onsubmit="return upload()" method="POST" enctype="multipart/form-data">

        <input type="file" name="featuredimage" placeholder="UploadImage" />
        <span id="return"></span>
        <button type="submit">Upload New Image</button>
        
        </form>
</h2>
<div id="actionTab">
    

</div>
<div id="imagehold">
<?php

include "api/showGallery.php";

?>

</div>



</section>
<script src="validate.js"></script>

</body>

</html>
