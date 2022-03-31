<!DOCTYPE html>
<html lang="br">
<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
 <font color="White">
<h2>Cadastre-se</h2>
</font>

  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
     <font color="White">
      <label class="control-label col-sm-2" for="nome completo">Nome completo</label>
</font>
      <div class="col-sm-10">
        <input type="nome completo" class="form-control" id="nome completo" placeholder=" nome completo" name="nome completo">
      </div>
    </div>
    <div class="form-group">
    <font color="White">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
</font>
      <div class="col-sm-10">        
        <input type="Email" class="form-control" id="pwd" placeholder=" Email" name="pwd">
      </div>
    </div>
    <div class="form-group">
    <font color="White">
      <label class="control-label col-sm-2" for="pwd">Senha:</label>
</font>
      <div class="col-sm-10">        
        <input type="Digite a senha" class="form-control" id="pwd" placeholder=" Digite a senha" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
        <font color="White">
            
          <label><input type="checkbox" name="remember"> Confirmar</label>
</font>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
