<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

  use PHPMailer\PHPMailer\PHPMailer;
 

$email = $_POST['email'];


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
    $mail->setFrom($email); 
    $mail->addAddress('tecrondigitalservices@gmail.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments

    // Content
    $mail->isHTML(true);                                // Set email format to HTML
    $mail->Subject = 'New Newsletter registration from your website ';
    $mail->Body    = "Someone registered for your newsletter with the E-mail $email";
    $mail->send();
    echo '<h2>Thank You for signing up</h2>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>