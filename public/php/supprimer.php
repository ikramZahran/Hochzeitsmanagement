<?php
	include 'connexion.php';   

    $id_invite=$_GET['id_invite'];

    $sql = "delete from invite where id_invite = '$id_invite'";
        if (mysqli_query($conn, $sql)) {
            header('Location: ../ajouterInvite.php');
            echo"Les données de l'étudiants sont supprimées ";
        } else {
            echo mysqli_error($conn);
        }
?>