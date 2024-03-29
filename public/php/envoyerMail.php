<?php
	include 'connexion.php';   
    // SELECT email and name values from database
    $sql = "select email from invite";
        if (mysqli_query($conn, $sql)) {
            $result = mysqli_query($conn, $sql);
            while ($row=mysqli_fetch_assoc($result)) {
                $mail->addAddress($row["email"], $row["name"]);

            }
            header('Location:../ajouterInvite.php');
        } else {
            echo mysqli_error($conn);
        }

        while ($row=mysqli_fetch_assoc($result)) 
        {
            // Instantiate a NEW email
            $mail = new PHPMailer;

            // Set the email settings
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
            $mail->Port = 587;
            $mail->Username = 'my@email.com';
            $mail->Password = 'mypassword';
            $mail->setFrom('myemail@email.com', 'Me');

            $mail->addReplyTo('myemail@email.com', 'Me');
            $mail->Subject = "Newsletter";

            // Add recipient from values found in database
            $mail->addAddress($row["email"], $row["name"]);

            $mail->Body ="Hello, <br> <br> $message";
            $mail->AltBody = $message;

            if(!$mail->Send())
            {
            echo "Message could not be sent.";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
            }

            print "Sent mail to: {$row["email"]}, {$row["name"]}";

        }
?>