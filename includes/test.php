<?php
include "db_connect.php";


$email = $_POST['email'];

$query = "INSERT INTO posts(id,title,author,body,date,featured_image) VALUES (NULL,'Modalbos','mad','mad','mad','creazy');";
mysqli_query($userConnect,$query);
echo "Added to database" . $email;

?>