
<?php
foreach(glob('../../../../../uploads/*',GLOB_NOSORT) as $image){
 
echo '<div class="imageBar"><button onclick='.'deleteImg("'.$image.'")'.'>Delete</button><img src="'.$image.'" onclick='.'Javascript:addImage("'.$image.'")'.' /></div> ';



}


?>