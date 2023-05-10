<?php


    $local = '127.0.0.1:3306';
    $user = 'root'; 
    $pwd = ''; 
    $db = 'produtos'; 
    
    $con = new mysqli($local, $user, $pwd, $db); 

    if ($con->connect_error){ 
        echo $con->connect_error; 
    }
    $nome = $_POST['nome']; 
    $cidade_nascimento = $_POST['cidade_nasc'];
    $data_nasc = $_POST['data_nascimento'];
    $ativo = $_POST['ativo'];

    $sql = "INSERT INTO clientes
            (nome, data_nascimento, cidade_nasc, ativo)
            values
            ('{$nome}', '{$data_nasc}', {$cidade_nascimento},{$ativo})";
    echo $sql;

        $con->query($sql); 
        $con->close(); 

       header("location: cliente.php");

?>

    

