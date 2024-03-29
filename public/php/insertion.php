<?php
	include 'connexion.php';   
    
    @$nom = $_POST['nomCompl'];
    @$sexe=$_POST['sexe'];
    @$email=$_POST['email'];
    @$mp=$_POST['mp'];
    @$nom_mariee=$_POST['nomCompl_mariee']; 
    if(isset($nom) && isset($sexe) && isset($email) && isset($mp)) 
    {  
        $sql = "Insert into marie (nom_complet, nom_complet_mariee, email, sexe, mp)Values('$nom','$nom_mariee','$email','$sexe','$mp')";
        if (mysqli_query($conn, $sql)) {
            header('Location: ../Connexion.php');
        } else {
            echo mysqli_error($conn);
        }
    }
    
?>