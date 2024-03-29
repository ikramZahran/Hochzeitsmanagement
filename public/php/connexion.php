<?php
if(!session_status()){

    session_start();
}
        $db_username = 'root';
        $db_password = '';
        $db_name     = 'gestion_mariage';
        $db_host     = 'localhost';
        $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name) or die('could not connect to database');
        
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
        // pour éliminer toute attaque de type injection SQL et XSS
        $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username'])); 
        $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
        
        if($username !== "" && $password !== "")
        {
            $requete = "SELECT *  FROM marie where email = '".$username."' and mp = '".$password."' ";
            $exec_requete = mysqli_query($conn,$requete);
            $reponse      = mysqli_fetch_array($exec_requete);
            //$count = $reponse['count(*)'];
            if($reponse) // nom d'utilisateur et mot de passe correctes
            {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $reponse["id_marie"];
                //$_SESSION['id_Mariage'] = $reponse["Id_Mariage"];
                // print_r($_SESSION);
                // var_dump($reponse);
                header('Location:../information.php');
            }
            else
            {
                echo "<script> alert('Email ou mot de passe incorrect');</script>";
            echo 'utilisateur ou mot de passe incorrect';
            }
        }
        else
        {
            echo "<script> alert('Email ou mot de passe vide');</script>";
        echo 'utilisateur ou mot de passe vide';
        }
    }
    else
    {
    //header('Location:../Inscription.php');
    };
    if(isset($_GET['id_invite']) && isset($_GET['id_marie'])){
        $_SESSION["id_invite"]=$_GET['id_invite'];
        $_SESSION["id_marie"]=$_GET['id_marie'];
        $requete = "SELECT *  FROM invite where id_invite = '".$_GET['id_invite']."'";
        $exec_requete = mysqli_query($conn,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        if($reponse) // nom d'utilisateur et mot de passe correctes
            {
            $_SESSION["nom_invite"] = $reponse["nom_complet"];
        }
    }
   // mysqli_close($conn); // fermer la connexion
?>