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
            <div class="container-nbr">
                <table>
                    <tr>
                        <td><p><img src="img/9.png"></p></td>
                        <td><p><img src="img/8.png"></p></td>
                    </tr>
                    <tr>
                        <td><label for="">Féminin</label></td>
                        <td><label for="">Masculin</label></td>
                    </tr>
                    <tr>
                        <td><label for="">
                            <?php
                                $requete = "SELECT count(*) FROM invite where sexe = 'féminin'";
                                $exec_requete = mysqli_query($conn,$requete);
                                $reponse      = mysqli_fetch_array($exec_requete);
                                $count = $reponse['count(*)'];
                                echo $count;
                            ?> 
                        </label></td>

                        <td><label for="">
                            <?php
                                // $sql="SELECT count(*) FROM invite where sexe = 'Masculin'";
                                // $result = mysqli_query($conn, $sql);
                                // $nb_journee=mysqli_fetch_assoc($result);
                                // echo $nb_journee;
                                //$result = mysql_result($sql);
                               // echo $result;

                               $requete = "SELECT count(*) FROM invite where sexe = 'Masculin'";
                                $exec_requete = mysqli_query($conn,$requete);
                                $reponse      = mysqli_fetch_array($exec_requete);
                                $count = $reponse['count(*)'];
                                echo $count;
                            ?>
                        </label></td>
                       
                    </tr>
                </table>
            </div>
            <!-- <div class="menue">
                <form>
                    <div>
                        <a href="telecharger.php" class="nav__link active">
                            <i class='bx bx-download'></i>
                            <span class="nav__name">Télécharger</span>
                        </a>
                    </div>
                    
                </form>
            </div><br> -->
        </section>
    </main>
    <!--========== MAIN JS ==========-->
    <script src="../js/main.js"></script>

    <!-- style -->
    <style>
        body{
            background-image: url("img/back.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .menue {
        position: absolute;
        padding-top: 1.3rem;
        margin-left: 40%;
        }
        .menue div{
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
        }
        .menue div a{
            padding: 2px;
            cursor: pointer;
        }
        .menue div a i{
            color: white;
            padding: 5px;
            padding-left: 0px;
        }
        .menue div a span{
            color: white;
            font-size: 18px;
            font-weight: 400;
            opacity: inherit;
        }
        .menue div img{
        height: 30px;
        width: 30px;
        }
        .menue div:hover{
        box-shadow: 1px 1px 10px 2px white;
        }
        .container-nbr{
        margin-top: 10%;
        background: rgba(255, 255, 255, .3);
        padding: 1.7rem;
        padding-top: 0.2rem;
        padding-bottom: 3.5rem;
        border-radius: 20px;
        border-left: 1px solid rgba(255, 255, 255, .3);
        border-top: 1px solid rgba(255, 255, 255, .3);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        -moz-backdrop-filter: blur(10px);
        box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
        text-align: center;
        width: 300px;
        height: 200px;
        margin-left: 40%;
        }
        .container-nbr table th, .container-nbr table td{
        padding: 8px;
        text-align: center;
        color: #606060;
        border-bottom: 0px;
        color: white;
        }
        p {
        color: white;
        font-weight: 500;
        opacity: .7;
        font-size: 1.4rem;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }
        img {
        height: 50px;
        width: 50px;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
    </style>
</body>
</html>