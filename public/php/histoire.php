<?php
	include 'connexion.php';   

    $id = $_SESSION['id'];
    @$contenue=$_POST['contenue'];
   
    if(isset($contenue)) 
    {  
        $sql = "Insert into histoire (contenue, id_marie) values ('$contenue', '$id')";
        if (mysqli_query($conn, $sql)) {
            header('Location: ../information.php');
        } else {
            echo mysqli_error($conn);
        }
    }
    
?>