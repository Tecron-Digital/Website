<?php

include '../../../../db_connect.php';
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
<li><a href="addPost">Create Post</a></li>

<li><a href="addPortfolio">Add portfolio Item</a></li>
<li><a href="/addreview">Add Review</a></li>
<li><a href="settings.php">Settings</a></li>
<li><a href="logout.php">Logout</a><li>


</ul>


</div>
<section class="changepassword">
    <h1>Change Password </h1>
<form action="changePassword.php" method="POST">
<input type="password" name="oldpassword" placeholder="   Old Password"/>
<input type="password" name="newpassword" placeholder="   New Password"/>

<button type="submit">Change</button>



</form>




</section>

<section class='adminssheet'>
<h1>Admins</h1>

<?php
$query = "SELECT id,Real_Name FROM admins;";
$result = mysqli_query($userConnect,$query);

while($row = mysqli_fetch_assoc($result)){
?>
<div class="admindetails">
<div class="adminid"><?php echo $row['id']; ?></div>
<div class="adminName"><?php echo $row['Real_Name']; ?>

</div>
<?php

if($_SESSION['status'] == "Editor"){

echo "<button class='unclickable'>Remove Admin</button>";
}

else{ 
  ?><button name="removeAdmin" class='clickable'><a href="action.php?request=del_admin&id=<?php echo $row['id'];?>">Remove Admin</a></button><?php

}
?>
</div>

<?php } ?>

</section>

<section class="changepassword addadmin">
    <h1>Add Admin</h1>
<form action="action.php" method="POST">
  <input type="hidden" name="request" value="add_admin"/>
<input type="text" placeholder="Real name" name="realname"><br>
<input type="text" placeholder="Choose Username" name="username"><br>
<input type="password" placeholder="password" name="password"> <br>
<?php

if($_SESSION['status'] == "Editor"){

echo "<button class='unclickable'>Add Admin</button>";
}

else{ 
  ?><button name="submit" class='clickable'>Add Admin</button><?php

}
?>
</form>
</section>









<script src="validate.js">




</script>
</body>

</html>
