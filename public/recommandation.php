<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="css/styles.css">

    <title>Recommandation</title>
</head>

<body>
    <!--========== CONTENTS ==========-->
    <?php include 'php/connexion.php'; ?>
    <main>
        <section>
            <div class="container">
                <form method="post" action="?action=envoie_recom">
                    <p><img src="img/k.png"></p>
                    <input type="text" placeholder="Nom d'invité" readonly value="<?php echo $_SESSION["nom_invite"]; ?>"><br>
                    <input type="text" placeholder="Objet" name="objet"><br>
                    <textarea name="recommandation" id="histoir" cols="30" rows="10" placeholder="Proposer votre recommandation {Traiteur, Negafa, ...}"></textarea><br>
                    <label for="">Allez-vous venir ? </label>
                    <input type="radio" name="presence" id="">Oui
                    <input type="radio" name="presence" id="">Non
                    <input type="radio" name="presence" id="">Peut-être
                    <br>
                    <input type="submit" value="Envoyer" id="envoie_recom">

                   
                </form>
            </div>
            <div><img src="img/vector-removebg-preview.png" alt="" class="img"></div>
        </section>
    </main>

    <!--========== MAIN JS ==========-->
    <script src="js/main.js"></script>
    <?php
    include 'php/connexion.php';
    if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] = "envoi_recom") {
        $objet = $_POST["objet"];
        $recommandation = $_POST["recommandation"];
        // $presence = $_POST["presence"];
        $sql = "Insert into recommandation (objet, contenue, id_invite, id_marie) Values 
        ('$objet','$recommandation','".$_SESSION['id_invite']."','".$_SESSION['id_marie']."')";
        if (mysqli_query($conn, $sql)) {
            // header('Location:../ajouterInvite.php');
        } else {
            echo mysqli_error($conn);
        }
    }
    ?>

    <!-- style -->
    <style>
        body {
            background-image: linear-gradient(to left, rgb(250, 250, 250), rgb(226, 128, 226));
        }

        .container {
        position: absolute;
        padding-top: 1.3rem;
        
        }
        .img{
            width: 30%;
            height: 30%;
            margin-left: 55%;
            margin-top: 10%;
        }

        div form {
        background: rgba(255, 255, 255, .3);
        padding: 1.7rem;
        padding-top: 0.2rem;
        padding-bottom: 3.5rem;
        height: 470px;
        border-radius: 20px;
        border-left: 1px solid rgba(255, 255, 255, .3);
        border-top: 1px solid rgba(255, 255, 255, .3);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        -moz-backdrop-filter: blur(10px);
        box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
        text-align: center;
        }

        p {
            color: white;
            font-weight: 500;
            opacity: .7;
            font-size: 1.4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }

        input[type="submit"],input[type="button"], input[type="text"]{
        background: transparent;
        border: none;
        border-left: 1px solid rgba(255, 255, 255, .3);
        border-top: 1px solid rgba(255, 255, 255, .3);
        padding: 0.7rem;
        width: 250px;
        border-radius: 50px;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        -moz-backdrop-filter: blur(5px);
        box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
        color: #4d4d4d;
        font-weight: 400;
        text-shadow: 2px 2px 4px rgba(199, 180, 196, 0.2);
        transition: all .3s;
        margin-bottom: 2em;
        }

        textarea {
            background: transparent;
            border: none;
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);
            padding: 0.7rem;
            width: 400px;
            height: 100px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            -moz-backdrop-filter: blur(5px);
            box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
            color: #4d4d4d;
            font-weight: 400;
            text-shadow: 2px 2px 4px rgba(199, 180, 196, 0.2);
            transition: all .3s;
            margin-bottom: 2em;
            margin-left: 2%;
        }

        input:hover,
        input[type="email"]:focus,
        input[type="password"]:focus {
            background: rgb(235, 208, 230);
            box-shadow: 1px 1px 10px 2px rgb(158, 61, 121);
        }

        textarea:hover {
            background: rgb(235, 208, 230);
            box-shadow: 2px 2px 10px 2px white;
        }

        input[type="button"],input[type="submit"] {
        margin-top: 15px;
        width: 150px;
        font-size: 1rem;
        cursor: pointer;
        background: rgb(187, 109, 173);
        color: white;
        }

        img {
            height: 65px;
            width: 65px;
        }

        ::placeholder {
            color: #9f9f9f;
        }
    </style>
</body>

</html>