<?php
    include("layout/topo.php");
    include("database/database.php");
    session_start();

    $sql = "SELECT * FROM produtos";

    $result = $con->query($sql);
    
    $usuario = $_SESSION["usuario"];

    if ($_SESSION["usuario"] == null) {
        header("location: login.php");
    }
?>

<div class='d-flex justify-content-between align-items-center'>
    <div>
        <h1>Cadastro de produtos</h1>
    
        <a href="novo_produto.php" class="btn btn-success">Novo produto</a>
    </div>

    <?php
        include("layout/perfil.php");
    ?>
</div>

<br>
<br>
<table class="table table-bordered table-dark w-100 ml-5">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Preço</td>
        <td>Quantidade</td>
        <td>Peso</td>
        <td>Opções</td>
    </thead>
    <tbody>
        <?php
            while($row = $result->fetch_assoc())
            {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['preco'] . "</td>
                        <td>" . $row['quantidade'] . "</td>
                        <td>" . $row['peso'] . "</td>
                        <td>
                            <a href='alterar_produto.php?id=" . $row['id'] . "'> 
                                ✏️ 
                            </a>
                            
                            <a href='excluir_produto.php?id=" . $row['id'] . "'>
                                🗑️
                            </a>
                        </td>
                     </tr>
                ";
            }        
        ?>
    </tbody>
</table>

<ul>
    <div>
        <li>
            TEXTO
        </li>
    </div>
</ul>