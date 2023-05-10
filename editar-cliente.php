

<?php
    include("database/database.php");

    $id = $_GET['id'];
    $nome = $_POST['nome']; 
    $cidade_nasc = $_POST['cidade_nasc'];
    $data_nascimento = $_POST['data_nascimento'];
    $ativo = $_POST['ativo'];

    $sql = "UPDATE `clientes` SET `nome`='$nome',
    `data_nascimento`='$data_nascimento',`cidade_nasc`=$cidade_nasc,`ativo`=$ativo WHERE `id`=$id";
    
    $con = new mysqli($local, $user, $pwd, $db);

    if ($con->connect_error){ 
        echo $con->connect_error;
    }

    $con->query($sql); 
    $con->close();

    header("location: cliente.php");
?>