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

    <title>Histoire d'amour</title>
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
            <div class="container">
                <form action="php/histoire.php" method="POST">
                    <p><img src="img/c-removebg-preview (1).png"></p>
                    <!-- <input type="text" placeholder="Nom Complet de marié" name="nom_marie"> -->
                    <?php
                        $id = $_SESSION['id'];
                        $requete = "SELECT nom_complet FROM marie where id_marie = $id";
                        $exec_requete = mysqli_query($conn,$requete);
                        $reponse      = mysqli_fetch_array($exec_requete);
                        $count = $reponse['nom_complet'];
                        echo "<input type='text' value='$count' name='nom_marie'>";
                    ?>
                    <?php
                        $id = $_SESSION['id'];
                        $requete = "SELECT nom_complet_mariee FROM marie where id_marie = $id";
                        $exec_requete = mysqli_query($conn,$requete);
                        $reponse      = mysqli_fetch_array($exec_requete);
                        $count = $reponse['nom_complet_mariee'];
                        echo "<input type='text' value='$count' name='nom_mariee'>";
                    ?><br>
                    <!-- <input type="text" placeholder="Nom Complet de mariée" name="nom_mariee"><br> -->
                    <textarea name="contenue"  cols="30" rows="10" placeholder="Racontez nous votre histoire d'amour"></textarea>
                    <input type="submit" value="Enregistrer"><br>
                </form>
            </div>
        </section>
    </main>

    <!--========== MAIN JS ==========-->
    <script src="js/main.js"></script>

    <!-- style -->
    <style>
        body{
            background-image: linear-gradient(to left, rgb(250, 250, 250) , rgb(226, 128, 226));
        }
        .container {
        position: absolute;
        padding-top: 1.3rem;
        margin-left: 20%;
        }

        form {
        background: rgba(255, 255, 255, .3);
        padding: 2rem;
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

        input{
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
        textarea{
        background: transparent;
        border: none;
        border-left: 1px solid rgba(255, 255, 255, .3);
        border-top: 1px solid rgba(255, 255, 255, .3);
        padding: 0.7rem;
        width: 400px;
        height: 150px;
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
        input[type="password"]:focus{
        background: rgb(235, 208, 230);
        box-shadow: 1px 1px 10px 2px rgb(158, 61, 121);
        }
        textarea:hover{
        background: rgb(235, 208, 230);
        box-shadow: 2px 2px 10px 2px white;
        }

        input[type="submit"] {
        margin-top: 9px;
        width: 150px;
        font-size: 1rem;
        cursor: pointer;
        background: rgb(187, 109, 173);
        color: white;
        }

        img {
        height: 90px;
        width: 100px;
        }

        ::placeholder {
        color: #9f9f9f;
        }
    </style>
</body>
</html>