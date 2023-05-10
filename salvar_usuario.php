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
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios
            (nome, usuario, email, senha)
            values
            ('{$nome}', '{$usuario}', '{$email}', '{$senha}')";

        $con->query($sql); 
        $con->close(); 

       header("location: index.php");

?>

    

