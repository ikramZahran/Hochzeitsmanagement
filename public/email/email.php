<?php

//include '../php/envoyerMail.php';

//recupérer les emails:
// include 'connexion.php';   
    
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'gestionmariage.maroc@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'maroc@2021';
//Set who the message is to be sent from
$mail->setFrom('gestionmariage.maroc@gmail.com', 'Gestion des mariages');
//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
// $mail->addAddress('ikram.zahrane@gmail.com', 'zahran');
// $mail->addAddress('groupbassma274@gmail.com', 'sss');

// adding emails from database
// SELECT email and name values from database
$sql = "select email, nom_complet from invite";
// Result = the database query
    if (mysqli_query($conn, $sql)) {
        $result = mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($result)) {

            // $mail = new PHPMailer;
            // Add recipients from values found in database
            $mail->addAddress($row["email"], $row["nom_complet"]);
            //ajoutez tous les destinataires en BCC
            //$mail->addBCC($row["email"], $row["nom_complet"]);
        }
        
        // header('Location:../ajouterInvite.php');
    } else {
        echo mysqli_error($conn);
    }
// 

//Set the subject line
$mail->Subject = 'Our Wedding Card';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('weddingcard.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'Waiting for you';
//Attach an image file
$mail->addAttachment('images/weddinginv.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

