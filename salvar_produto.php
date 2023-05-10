<?php
    include("database\database.php");
    
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $peso = $_POST['peso'];

    $sql = "SELECT * FROM produtos WHERE nome='${nome}'";
    
    $resultado = $con->query($sql)->fetch_assoc();
    if($resultado) 
    {
        echo "Ja existe";
    }
    else
    {
        $sql = "INSERT INTO produtos 
        (nome, preco, quantidade, peso)
        VALUES
        ( '{$nome}', {$preco}, {$quantidade}, {$peso} )";

        $con->query($sql); //executar o insert no banco
        $con->close(); //fechar conexão

        header("location: index.php");
    }


    
?>
<script>
    setTimeout(200000, window.location.reload)
</script>