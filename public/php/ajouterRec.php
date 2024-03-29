<?php
	include 'connexion.php';   

    // $idMarier = $_SESSION['id'];
    // $id_invite = $_GET['id_invite'];
    $objet=$_POST['objet'];
    $contenue=$_POST['contenue'];
   
    if(isset($contenue)) 
    {  
        $sql = "Insert into recommandation (objet, contenue, id_invite, id_marie) values ('$objet', '$contenue', 10, 1)";
        if (mysqli_query($conn, $sql)) {
            header('Location: ../recommandation.php');
        } else {
            echo mysqli_error($conn);
        }
    }
    
?>