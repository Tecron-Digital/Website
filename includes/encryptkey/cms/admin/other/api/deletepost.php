<?php

if(isset($_GET['id'])){
$id = $_GET['id'];

}

else{
exit("No post to delete");

}

$query = "DELETE FROM posts WHERE id = $id;";
mysqli_query($userConnect,$query);

$outcome;
echo "Post Deleted Successfully";

?>







</html>