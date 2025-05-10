<?php
require("./mailing/mailfunction.php");

$name = $_POST["name"];
$phone = $_POST['phone'];
$email = $_POST["email"];
$message = $_POST["message"];


$body = "<ul>
            <li><strong>Name:</strong> ".$name."</li>
            <li><strong>Phone:</strong> ".$phone."</li>
            <li><strong>Email:</strong> ".$email."</li>
            <li><strong>Message:</strong> ".$message."</li>
         </ul>";


$receiver_email = "balloonflame7india@outlook.com"; 


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
$headers .= "From: ".$email . "\r\n";  


$status = mail($receiver_email, "New Contact Form Submission", $body, $headers);

if($status)
    echo '<center><h1>Thanks! We will contact you soon.</h1></center>';
else
    echo '<center><h1>Error sending message! Please try again.</h1></center>';


$user_subject = "Thank you for contacting us!";
$user_message = "Dear ".$name.",\n\nThank you for reaching out to us. We have received your message and will get back to you shortly.\n\nBest regards,\nBalloonFlame7 Team";
mail($email, $user_subject, $user_message, "From: balloonflame7india@outlook.com");
?>
