<?php
    include("layout/topo.php");
    include("database/database.php");

    $id = $_GET['id'];

    echo "<div class='p-4'>
    <form method='post' action='editar-cliente.php?id={$id}'>
      <div class='form-group'>
        <label>Nome do cliente</label>
        <input type='text' name='nome'class='form-control' >
      </div>
    
      <div class='form-group'>
        <label>Data nascimento</label>
        <input type='date' name='data_nascimento'class='form-control' >
      </div>
    
      <div class='form-group'>
        <label>Cidade nascimento (número)</label>
        <input type='numbe' name='cidade_nasc'class='form-control' >
      </div>
    
      <div class='form-group'>
        <label>Ativo (número)</label>
        <input type='numbe' name='ativo'class='form-control' >
      </div>
    
      <button type='submi' class='btn btn-succes'>Salvar</button>
    </form>
  </div>
    ";
?>