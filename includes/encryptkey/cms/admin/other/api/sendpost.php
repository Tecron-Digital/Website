
<?php


$title = mysqli_real_escape_string($userConnect,$_POST['postTitle']);
$body = mysqli_real_escape_string($userConnect,nl2br($_POST['postBody']));
$author = $_POST['postAuthor'];
$category = $_POST['category'];
$date = date("jS \of F Y");
$isGood = false;
//file upload;
$file = $_FILES['featuredimage'];
$fileName = $file['name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileTmp = $file['tmp_name'];
$newFileName;
echo $fileError;
checkFile();

if($isGood == true){
  $query = "INSERT INTO posts(id,title,author,body,date,featured_image,category) VALUES (NULL,'$title','$author','$body','$date','$newFileName','$category');";
  $error = mysqli_query($userConnect,$query);


}

else{
echo "Cannot Send post due to an upload error please try again";


}









function checkFile(){


if($GLOBALS['fileError'] == 0 ){
    
if($GLOBALS['fileSize'] < 500000){
getNewName();

}
else{
echo("Uploaded image is too big");

$GLOBALS['isGood'] = false;

}

}

  else{
echo "There was a problem uploading your file";
$GLOBALS['isGood'] = false;

  }


}

function getNewName(){
$tempextension = explode('.',$GLOBALS['fileName']) ;
$mainextension = strtolower(end($tempextension));
$allowed = array("jpg","png","jpeg","psd");

if(in_array($mainextension,$allowed)){
  $GLOBALS['newFileName'] = uniqid('',true).".".$mainextension;
$GLOBALS['isGood'] = true;

$destination = "../../../../../uploads/" . $GLOBALS['newFileName'];
move_uploaded_file($GLOBALS['fileTmp'],$destination);
echo "File good to go";

}

else{
  $GLOBALS['isGood'] = false;
echo "file format is not supported";

}
}





     echo $isGood; 
     echo mysqli_error($userConnect);
     
     ?>
 