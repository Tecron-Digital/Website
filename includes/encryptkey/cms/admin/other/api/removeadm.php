<?php


if(isset($_GET['id'])){
$id = $_GET['id'];

}

else{
header('location:../index.php');
exit("invalid request");

}

$query = "DELETE FROM admins WHERE id = $id;";
mysqli_query($userConnect,$query);


?>

