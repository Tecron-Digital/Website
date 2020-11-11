<?php 

session_start();

include '../../db_connect.php';

$error = "";
if(isset($_SESSION['Logged in'])){
echo "You are logged in!!";
header("Location:admin/index.php");

}

else{
if(isset($_POST['submit'])){

$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];


$query = "SELECT * FROM admins WHERE username='$enteredUsername';";
$nameResult = mysqli_query($userConnect,$query);
$isContained = mysqli_num_rows($nameResult);

$passquery = "SELECT * FROM admins WHERE username='$enteredUsername' AND password='$enteredPassword';";
$passresult = mysqli_query($userConnect,$passquery);
$isPasswordContained = mysqli_num_rows($passresult);


if($isContained < 1  AND $isPasswordContained < 1 ){
    $error = "Your credentials does not match our records";
    
    };


if($isContained == 1  AND $isPasswordContained < 1 ){
$error = "User Found please type in your password correctly";

};


if($isContained == 1  AND $isPasswordContained >= 1 ){
    $error = "Login Success";

  while($row = mysqli_fetch_assoc($passresult)){
      
$_SESSION['username'] = $row['username'];
$_SESSION['real name'] = $row['Real_Name'];
$_SESSION['status'] = $row['Status'];

  }



$_SESSION['Logged in'] = true;
header("Location: admin-login.php");

 

    
    };


};






};



?> 

<!DOCTYPE html>


<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css"/>
</head>

<body>


<form method="POST" >
<center><img src="../../../img/LOGO_GOLD.png">
<br>


<h2>Login to Control Panel</h2>
</center>
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password"/><br>
<center>

<small> <?php

if(isset($error)){
    echo $error;

}

?></small>
<br>

 <button type="submit" name="submit">Submit</button></center>


</form>



</body>
</html>