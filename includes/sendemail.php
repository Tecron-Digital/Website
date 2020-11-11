<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

  use PHPMailer\PHPMailer\PHPMailer;

  if(isset($_POST['key'])){
if(!$_POST['key']==="56gf"){
exit("You are not allowed to do this");

}
else{


};


  }

  else{
    exit("You are not allowed to do this ");

  }
 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['request'];
$phone = $_POST['phone'];

try {
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/Exception.php";
    
    $mail = new PHPMailer();
  
    //Server settings
                         // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'markakafrank10@gmail.com';                     // SMTP username
    $mail->Password   = 'franko4life';                               // SMTP password
    $mail->SMTPSecure = "ssl";        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email,$name); 
    $mail->addAddress('tecrondigitalservices@gmail.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments

    // Content
    $mail->isHTML(true);                                // Set email format to HTML
    $mail->Subject = 'New contact from your website ';
    $mail->Body    = "Name : $name <br> Message:$message <br>Email:$email<br> Phone Number: $phone";
    $mail->send();
    echo 'Message has been sent';
    $content = file_get_contents("registrations.txt",true);
    $file  = file_put_contents("registrations.txt",$content.$email);
} catch (Exception $e) {
    echo "Message could not be sent";
}

?>