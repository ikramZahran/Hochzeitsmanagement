<?php
include 'php/connexion.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="css/styles.css">

    <title>Ajouter invité</title>
</head>

<body>
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <img src="img/perfil.jpg" alt="" class="header__img">
            <a href="#" class="header__logo">BIENVENUE</a>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="index.php" class="nav__link nav__logo">
                    <i class='bx bx-happy-beaming nav__icon'></i>
                    <span class="nav__logo-name">MARIAGE</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Profile</h3>

                        <a href="information.php" class="nav__link active">
                            <i class='bx bx-male-female nav__icon'></i>
                            <span class="nav__name">Histoire</span>
                        </a>

                        <div class="nav__dropdown">
                            <a href="html/jour j.html" class="nav__link">
                                <i class='bx bx-calendar nav__icon'></i>
                                <span class="nav__name">Jour J</span>
                            </a>
                        </div>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Préparation</h3>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-music nav__icon'></i>
                                <span class="nav__name">Préstataire</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="html/traiteur.html" class="nav__dropdown-item">Traiteur</a>
                                    <a href="html/negafa.html" class="nav__dropdown-item">Negafa</a>
                                    <a href="html/buffet.html" class="nav__dropdown-item">Buffet</a>
                                    <a href="html/salle.html" class="nav__dropdown-item">Salle</a>
                                </div>
                            </div>

                        </div>

                        <a href="recommandation_Marie.php" class="nav__link">
                            <i class='bx bx-message nav__icon'></i>
                            <span class="nav__name">Recommendation</span>
                        </a>

                    </div>

                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-id-card nav__iconn'></i>
                            <span class="nav__name">Invité</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="ajouterInvite.php" class="nav__dropdown-item">Ajouter Inviter</a>
                                <a href="listeInvite.php" class="nav__dropdown-item">Liste des invités</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <a href="php/deconnexion.php" class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Se deconnecter</span>
            </a>
        </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <main>
        <section>
            <h2>Ajouter vous invitez</h2>
            <div class="container-menue">
                <form class="menue">
                    <div>
                        <a class="nav__link active" id="myBtn">
                            <i class='bx bxs-add-to-queue'></i>
                            <span class="nav__name">Ajouter</span>
                        </a>
                    </div>
                    <div>
                        <a class="nav__link active" id="envoie_email">
                            <i class='bx bxs-send'></i>
                            <span class="nav__name">Envoyer</span>
                        </a>
                    </div>
                </form>
            </div><br><BR><BR></BR></BR>

            <div class="container-tab">
                <table>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Sexe</th>
                        <th>Téléphone</th>
                        <th>E-mail</th>
                        <th>Statue</th>
                        <!-- <th></th> -->
                        <th></th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM invite";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_invite'] . "</td>";
                        echo "<td>" . $row['nom_complet'] . "</td>";
                        echo "<td>" . $row['sexe'] . "</td>";
                        echo "<td>" . $row['tel'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['Statut'] . "</td>";
                        // echo "<td><a href='php/modifier.php?id_invite=$row[id_invite]' class='nav__link active'><i class='bx bx-paint' id='upd'></i></a></td>";
                        echo "<td><a href='php/supprimer.php?id_invite=$row[id_invite]' class='nav__link active'><i class='bx bx-message-x'></i></a></td>";
                        echo "</tr>";
                    }

                    ?>
                </table>
        </section>
        <!-- click sur ajouter -->
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2 style="margin-left:0px;">Invité</h2>
                </div>
                <div class="modal-body">
                    <form action="php/ajouterInv.php" method="POST">
                        <p><img src="img/7.png"></p>
                        <input type="text" placeholder="Nom Complet" name="nomCompl"><br>
                        <select name="sexe">
                            <option value="Féminin" selected>Féminin</option>
                            <option value="Masculin">Masculin</option>
                        </select><br> <input type="text" placeholder="Téléphone" name="tel"><br>
                        <input type="email" placeholder="Email" name="email"><br>
                        <select name="statue">
                            <option value="Présent">Présent</option>
                            <option value="Absent">Absent</option>
                            <option value="En_attend" selected>En attend</option>
                        </select><br>
                        <input type="submit" value="Ajouter"><br>
                    </form>
                </div>
            </div>

        </div>

        <script>
            // Envoie email
            var envoie_email = document.getElementById("envoie_email");

            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
            //onclick event for sending mails
            envoie_email.onclick = function() {
                window.location.href = "?action=envoi_mail"

            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

 </main>
    <!--========== MAIN JS ==========-->
    <script src="../js/main.js"></script>

    <!-- style -->
    <style>
        body {
            background: linear-gradient(45deg, rgb(158, 61, 121), #f1f4f8);
            height: 90vh;
            font-family: arial, sans-serif;
            align-items: center;
            justify-content: center;
        }

        .container-menue {
            position: absolute;
            padding-top: 1.3rem;
            margin-left: 20%;
            width: 800px;
            height: 80px;
        }

        .menue div {
            background: rgba(255, 255, 255, .3);
            padding: 1.7rem;
            padding-top: 0.2rem;
            padding-bottom: 0.2rem;
            height: 40px;
            width: 180px;
            border-radius: 20px;
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            -webkit-backdrop-filter: blur(10px);
            -moz-backdrop-filter: blur(10px);
            box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
            text-align: center;
            margin: 5px;
            display: inline-block;
        }

        .menue div a {
            padding: 2px;
            cursor: pointer;
        }

        .menue div a i {
            color: white;
            padding: 5px;
        }

        .menue div a span {
            color: white;
            font-size: 18px;
            font-weight: 400;
            opacity: inherit;
        }

        .menue div img {
            height: 30px;
            width: 30px;
        }

        .menue div:hover {
            box-shadow: 1px 1px 10px 2px white;
        }

        .container-tab {
            position: absolute;
            padding-top: 0rem;
            margin-left: 60%;
            width: 750px;
            height: 370px;
            border-radius: 20px;
            background: rgba(255, 255, 255, .3);
            padding: 1.7rem;
            padding-top: 0.2rem;
            padding-bottom: 0.2rem;
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            -webkit-backdrop-filter: blur(10px);
            -moz-backdrop-filter: blur(10px);
            box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
            text-align: center;
            margin: 5px;
            margin-left: 20%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 8px;
            text-align: left;
            border-bottom: 2px solid #ddd;
            color: #606060;
            font-size: 13px;
        }

        th {
            padding: 11px;
            text-align: left;
            border-bottom: 2px solid #ddd;
            color: #c42ead;
        }

        h2 {
            margin-left: 23%;
            color: white;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            -webkit-animation-name: fadeIn;
            /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s;
        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            bottom: 0;
            background-color: #fefefe;
            width: 30%;
            float: right;
            margin-left: 40%;
            height: 460px;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s;
            background-color: rgb(248, 192, 245);
            margin-bottom: 10px;
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #b64fad;
            color: white;
        }

        .modal-body {
            padding: 2px 10px;
            background: rgba(255, 255, 255, .3);
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            -moz-backdrop-filter: blur(10px);
            box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
            text-align: center;
            height: 410px;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        p {
            color: white;
            font-weight: 500;
            opacity: .7;
            font-size: 1.4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }

        input[type="submit"] {
            margin: 2px;
            width: 100px;
            height: 35px;
            font-size: 15px;
            cursor: pointer;
            background: #b64fad;
            color: #fff;
        }

        input:hover,
        input[type="email"]:focus,
        input[type="password"]:focus {
            background: rgb(235, 208, 230);
            box-shadow: 1px 1px 10px 2px rgb(158, 61, 121);
        }

        img {
            height: 30px;
            width: 36px;
        }

        ::placeholder {
            color: rgb(151, 144, 144);
        }

        input,
        select {
            background: transparent;
            border: none;
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            padding: 0.7rem;
            width: 200px;
            border-radius: 50px;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            -moz-backdrop-filter: blur(5px);
            box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
            color: rgb(110, 105, 105);
            font-weight: 200;
            text-shadow: 2px 2px 4px rgba(199, 180, 196, 0.2);
            transition: all .3s;
            margin-bottom: 1em;
        }
    </style>
</body>

</html>
<?php
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] = "envoi_mail") {
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
    $mail->addAddress('aymanidou@gmail.com', 'Aymen idouahman');
    // $mail->addAddress('ikram.zahrane@gmail.com', 'zahran');
    // $mail->addAddress('groupbassma274@gmail.com', 'sss');


    // adding emails from database
    // SELECT email and name values from database
    $sql = "select id_invite,email, nom_complet from invite";
    // Result = the database query
    if (mysqli_query($conn, $sql)) {
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

            // $mail = new PHPMailer;
            // Add recipients from values found in database
            $mail->addAddress($row["email"], $row["nom_complet"]);

            //ajoutez tous les destinataires en BCC
            // $mail->addBCC($row["email"], $row["nom_complet"]);




            //Set the subject line
            $mail->Subject = 'Our Wedding Card';
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            // $mail->msgHTML(file_get_contents('email/weddingcard.html'), 'email/');
            $email_html = file_get_contents('email/beefree.php');
            $link = "http://gestion-mariage.test/recommandation.php?id_invite=".$row["id_invite"]."&id_marie=".$_SESSION['id'];
            $email_html = str_replace("link_invite", $link, $email_html);
            $mail->msgHTML($email_html, 'email/');
            //Replace the plain text body with one created manually
            $mail->AltBody = 'Waiting for you';
            //Attach an image file
            $mail->addAttachment('email/images/weddinginv.png');

            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message sent!';
            }
            $mail->clearAddresses();
            $mail->clearAttachments();
        }

        // header('Location:../ajouterInvite.php');
    } else {
        echo mysqli_error($conn);
    }
}
?>