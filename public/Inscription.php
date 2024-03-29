<?php
  include 'php/connexion.php';   
?>

<html>
<head>
  <title> Inscription </title>
</head>

<body>
  <div class="container">
    <br><br><br><br>
    
    <form action="php/insertion.php" method="POST">
      <p><img src="img/ins.png"></p>
      <input type="text" placeholder="Nom Complet de marié" name="nomCompl">
      <input type="text" placeholder="Nom Complet de mariée" name="nomCompl_mariee"><br>
      <!-- <input type="text" placeholder="Sexe" name="sexe"><br> -->
      <select name="sexe" class="sx">
                <option value="Féminin" selected>Féminin</option>
                <option value="Masculin">Masculin</option>
            </select><br>
      <input type="email" placeholder="Email" name="email"><br>
      <input type="password" placeholder="Mot de passe" name="mp"><br>
      <input type="password" placeholder="Confirmer mot de passe" name="mpConf"><br>
      <input type="submit" value="Créer" name="submit"><br>
    </form> 
  </div>
  <style>
    body {
      background: linear-gradient(45deg, rgb(158, 61, 121), #f1f4f8);
      height: 80vh;
      font-family: arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      position: absolute;
      padding-top: 3rem;
    }

    form {
      background: rgba(255, 255, 255, .3);
      padding: 3rem;
      padding-top: 1rem;
      padding-bottom: 5rem;
      height: 490px;
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

    input, .sx {
      background: transparent;
      border: none;
      border-left: 1px solid rgba(255, 255, 255, .3);
      border-top: 1px solid rgba(255, 255, 255, .3);
      padding: 1rem;
      width: 270px;
      border-radius: 50px;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      -moz-backdrop-filter: blur(5px);
      box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
      color: #1e2e1e;
      font-weight: 500;
      text-shadow: 2px 2px 4px rgba(199, 180, 196, 0.2);
      transition: all .3s;
      margin-bottom: 2em;
    }

    input:hover,
    input[type="email"]:focus,
    input[type="password"]:focus {
      background: rgb(235, 208, 230);
      box-shadow: 1px 1px 10px 2px rgb(158, 61, 121);
    }

    input[type="submit"] {
      margin-top: 9px;
      width: 150px;
      font-size: 1rem;
      cursor: pointer;
      background: rgb(187, 109, 173);
      color:white;
    }

    img {
      height: 80px;
      width: 80px;
    }

    ::placeholder {
      color: #a27c82;
    }
  </style>
</body>

</html>