<html>

<head>
  <title> Connexion </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>

<body>
  <div class="container">
    <form action="php/connexion.php" method="POST" id="perso" onsubmit="return formvalidation()">
      <p><img src="img/ins.png"></p>
      <div class="error" id="div_error"></div>
      <input type="text" placeholder="Email" name="username" id="femail">
      <span id="email"></span>
      <br>
      <input type="password" placeholder="Mot de passe" name="password" id="fpassword">
      <span id="mp"></span>
      <br>

      <input type="submit" value="Connexion" id="submit"><br>
      <a href="#">Mot de passe oublié</a>
      <p class="in">Vous-êtez un nouveau marié? Bienvenue : 
        <a href="Inscription.php?new=0" style="font-weight: bold; color: purple;">S'inscrire</a>
      </p>
      
      <script type="text/javascript">
        function formvalidation(){
            var mdp = $("#fpassword").val();
            var email = $("#femail").val();
           if (mdp==""){
                $("#div_error").show();
                $("#div_error").text("Entrer votre mot de passe");
                $("#fpassword").css({"background-color": "WHITE"});
                return false;
            }else{
                var pattern_mdp=/^[0-9a-zA-Z]{3,8}$/;
                if (!pattern_mdp.test(mdp)){
                    $("#div_error").show();
                    $("#div_error").text("Enter un mot de passe valide");
                    $("#fpassword").css({"background-color": "white"});
                    return false;
                }
            }

            if (email==""){
                $("#div_error").show();
                $("#div_error").text("Entrer votre email");
                $("#femail").css({"background-color": "white"})
                return false;
            }else{
                var pattern_email=/^[A-z0-9._-]+[@]{1}[a-zA-Z0-9]+[.]{1}[a-zA-Z]{2,3}$/;
                if (!pattern_email.test(email)){
                    $("#div_error").show();
                    $("#div_error").text("Enter un email valide");
                    $("#femail").css({"background-color": "white"});
                    return false;
                }
            }
            return true;
        }


    </script> 
    </form>
  </div>
  <style>
    body {
      /*e463b2*/
      background: linear-gradient(45deg, rgb(158, 61, 121), #f1f4f8);
      height: 90vh;
      font-family: arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .error {
            color : red;
            font-weight: bolder;
            }
/* Voici la mise en forme pour les erreurs */
#mp, #email {
  width  : 100%;
  padding: 0;

  font-size: 80%;
  color: white;
  background-color: #900;
  border-radius: 0 0 5px 5px;

  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

#mp.active , #email.active {
  padding: 0.3em;
}
    .container {
      position: absolute;
    }

    .in {
      font-size: 12px;
    }

    form {
      background: rgba(255, 255, 255, .3);
      padding: 3rem;
      padding-top: 1rem;
      padding-bottom: 5rem;
      height: 370px;
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

    a {
      text-decoration: none;
      color: #ddd;
      font-size: 12px;
    }

    a:hover {
      text-shadow: 2px 2px 6px #00000040;
    }

    a:active {
      text-shadow: none;
    }

    input {
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