<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.fortageunion.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "info@fortageunion.com"; // Change Email Address
        $mail->Password = '+C@ppy126'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@fortageunion.com','Fortage Union PLC'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("info@fortageunion.com", "Fortage Union PLC"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>