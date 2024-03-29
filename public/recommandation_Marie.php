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

    <title>Recommandation</title>
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
            <h2>Liste des recommandations</h2>
            <div class="container-tab">
                <table>
                    <tr>
                        <!-- <th>Nom d'invité</th> -->
                        <th>Objet</th>
                        <th>Recommandation</th>
                   </tr>
                    <?php
                        $id = $_SESSION['id'];
                        // $sql="SELECT * FROM recommandation, marie where marie.id_marie = recommandation.id_marie and recommandation.id_marie = $id";
                        $sql="SELECT * FROM recommandation where id_marie = $id";
                        $result = mysqli_query($conn, $sql);
                        while ($row=mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                                // echo "<td>".$row['id_invite']."</td>";
                                echo "<td>".$row['objet']."</td>";
                                echo "<td>". $row['contenue']."</td>";
                            echo "</tr>";
                        }

                    ?> 
                </table>
        </section>
    </main>

    <!--========== MAIN JS ==========-->
    <script src="js/main.js"></script>

    <!-- style -->
    <style>
        body{
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
        display: inline-block;
        }
        .menue div a{
            padding: 2px;
            cursor: pointer;
        }
        .menue div a i{
            color: white;
            padding: 5px;
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

        .container-tab{
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
        margin-left: 15%;
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
        th{
        padding: 11px;
        text-align: left;
        border-bottom: 2px solid #ddd;
        color: #c42ead;
        }
        h2{
            margin-left: 23%;
            color: white;
        }
    </style>
</body>
</html>