<?php
	include 'connexion.php';   

    $id_invite=$_GET['id_invite'];
    $nomCompl=$_POST['nomCompl'];
    $sexe=$_POST['sexe'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $statue=$_POST['statue'];
    
    if(isset($nomCompl) && isset($sexe) && isset($tel) && isset($email)) 
    {  
    $sql = "update invite set nom_complet = '$nomCompl' , sexe = '$sexe', tel = '$tel', email = '$email', Statut = '$statue' where id_invite = '$id_invite'";
        if (mysqli_query($conn, $sql)) {
            header('Location: ../ajouterInvite.php');
        } else {
            echo mysqli_error($conn);
        }
    }
?>