<?php


$url = $_POST['url'];


if(!unlink($url)){
echo "Photo Could not be deleted due to an error";

}
else{

echo "Image Deleted Successfully";

}
    
    ?>
