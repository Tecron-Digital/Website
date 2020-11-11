<?php



if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $realname = $_POST['realname'];
    $password = $_POST['password'];

}
else{
echo "<big><bold>404 not found</bold></big>";
exit();

}




$query = "INSERT INTO admins(username,Real_Name,password) VALUES('$username','$realname','$password');";
mysqli_query($userConnect,$query);

echo "Admin added successfully";


?>


