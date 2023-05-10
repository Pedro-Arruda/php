
<?php
    include("layout/topo.php");
?>
<div class="p-4">
  <form method='post' action='salvar_cliente.php'>
    <div class="form-group">
      <label>Nome do cliente</label>
      <input type="text" name='nome'class="form-control" >
    </div>
  
    <div class="form-group">
      <label>Data nascimento</label>
      <input type="text" name='data_nascimento'class="form-control" >
    </div>
  
    <div class="form-group">
      <label>Cidade nascimento</label>
      <input type="number" name='cidade_nasc'class="form-control" >
    </div>
  
    <div class="form-group">
      <label>Ativo</label>
      <input type="number" name='ativo'class="form-control" >
    </div>
  
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
