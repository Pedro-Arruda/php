<?php
    include("layout/topo.php");
    include("database/database.php");

    $sql = "SELECT * FROM clientes";

    $result = $con->query($sql);
?>

<h1>Página de cliente</h1>

<a href="novo_cliente.php" class="btn btn-primary">Novo cliente</a>

<table class="table table-bordered table-dark w-100 mt-3">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Data nascimento</td>
        <td>Cidade</td>
        <td>Ativo</td>
        <td>Opções</td>
    </thead>
    <tbody>
        <?php
            while($row = $result->fetch_assoc())
            {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['data_nascimento'] . "</td>
                        <td>" . $row['cidade_nasc'] . "</td>
                        <td>" . $row['ativo'] . "</td>
                        <td>
                            <a href='form-editar-cliente.php?id=" . $row['id'] . "'> 
                                ✏️ 
                            </a>
                            
                            <a href='excluir-cliente.php?id=" . $row['id'] . "'>
                                🗑️
                            </a>
                        </td>
                     </tr>
                ";
            }        
        ?>
    </tbody>
</table>

<?php
    include("layout/baixo.php");
?>
