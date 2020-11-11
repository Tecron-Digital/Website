<?php





$file = $_FILES['featuredimage'];
$fileName = $file['name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileTmp = $file['tmp_name'];
$newFileName;
$isGood = false;
checkFile();


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
    echo "File Upload Successful";
    
    }
    
    else{
      $GLOBALS['isGood'] = false;
    echo "file format is not supported";
    
    }
    }
    
    ?>
