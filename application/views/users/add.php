<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desafio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Desafio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('user/home'); ?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('user/list'); ?>">Listar</a></li>
          <li><a href="<?php echo base_url('user/add'); ?>">Cadastrar</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Salas <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('classroom/list'); ?>">Listar</a></li>
          <li><a href="<?php echo base_url('classroom/add'); ?>">Cadastrar</a></li>
        </ul>
      </li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>
</nav>

  <div class="container">
    <h2>Cadastrar Usuário</h2>
    <form class="form-horizontal" method="post" action="<?php echo base_url('user/register'); ?>">
      <div class="form-group">
        <label class="control-label col-sm-2" for="first_name">Nome:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="<?php echo $user->first_name ?>" required placeholder="Digite o nome" name="first_name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="last_name">Sobrenome:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="last_name" value="<?php echo $user->last_name ?>" placeholder="Digite o sobrenome" name="last_name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Email: <b>( Login )</b></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="username" value="<?php echo $user->username ?>" placeholder="Digite o email" name="username">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Senha:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pwd" placeholder="Digite a senha" name="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4 pull-right">
          <input name="id" type="hidden" value="<?php echo $user->id; ?>">
          <input class="btn btn-lg btn-success btn-block" type="submit" value="Salvar" name="salvar" >
        </div>
      </div>
    </form>
  </div>
</body>
</html>

