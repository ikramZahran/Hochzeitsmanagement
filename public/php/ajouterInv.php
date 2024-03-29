<?php
	include 'connexion.php';   
    
    @$nom = $_POST['nomCompl'];
    @$sexe=$_POST['sexe'];
    @$email=$_POST['email'];
    @$statue=$_POST['statue'];
    @$tel=$_POST['tel']; 
    if(isset($nom) && isset($sexe) && isset($email) && isset($statue) && isset($tel)) 
    {  
        $sql = "Insert into invite (Statut, nom_complet, email, tel, sexe)Values('$statue','$nom','$email','$tel', '$sexe')";
        if (mysqli_query($conn, $sql)) {
            header('Location:../ajouterInvite.php');
        } else {
            echo mysqli_error($conn);
        }
    }
    
?>