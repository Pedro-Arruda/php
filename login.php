

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
  <div class="container mt-5">
    <h1>Login</h1>
    <form method='post' action='verificaLogin.php' class='mt-5'>
    
      <div class="form-group">
        <label>Email</label>
        <input type="email" name='email'class="form-control" placeholder='Digite seu email'>
      </div>

      <div class="form-group">
        <label>Senha</label>
        <input type="password" name='senha' class="form-control" placeholder='Digite sua senha'>
      </div>
  

      <div class="d-flex justify-content-end">
        <button  type="submit" class="btn   btn-primary px-5">Entrar</button>
        <a href="novo_usuario.php" class="btn  btn-outline-primary px-5 ml-3">Cadastrar</a>
      </div>

    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/37479ac35a.js" crossorigin="anonymous"></script>
</body>
</html>