<?php
    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id={$id}";

    include("database/database.php");

    
    $con = new mysqli($local, $user, $pwd, $db);

    if ($con->connect_error){ 
        echo $con->connect_error;
    }

    $con->query($sql); 
    $con->close();

     header("location: cliente.php");
?>

    

