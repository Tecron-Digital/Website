<?php
include "../../../../db_connect.php";
$key = 4902753;
if(isset($_SESSION['Logged In'])){


}
else{
  header("Location:../../admin-login.php");
}


if(isset($_GET['request'])){
$request_type=$_GET['request'];
}
else if(isset($_POST['request'])){
    $request_type=$_POST['request'];

}
else{
    echo "Request Type not found";
    exit();
}


switch($request_type){
  case "add_admin";
  include_once "api/addAdmin.php";
break;

case "add_post";
include_once "api/sendpost.php";
break;
case "add_portfolio";
include_once "api/addPortfolio.php";
break;
case "add_review";
include_once "api/addReview.php";
break;
case "del_post";
include_once "api/deletePost.php";
break;
case "del_admin";
include_once "api/removeAdm.php";
break;
case "upload_gallery";
include_once "api/upload.php";
break;
case "del_img";
include_once "api/deleteImg.php";
break;
case "show_gallery";
include_once "api/showgallery.php";


}





?>