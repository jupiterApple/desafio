<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration-CI Login Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>

<span style="background-color:red;">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-info">
                  <div class="panel-heading">
                      <h3 class="panel-title">Cadastro</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('user/register'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" required placeholder="Nome" name="first_name" type="text" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" required placeholder="Sobrenome" name="last_name" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" required placeholder="E-mail" name="username" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" required placeholder="Senha" name="password" type="password" value="">
                              </div>
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Salvar" name="salvar" >
                          </fieldset>
                      </form>
                      <br>
                      <form role="form" method="post" action="<?php echo base_url('user/list'); ?>">
                          <input class="btn btn-lg btn-info btn-block" type="submit" value="voltar" name="voltar" >
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</span>
  </body>
</html> -->

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
          <input type="text" class="form-control" required placeholder="Digite o nome" name="first_name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="last_name">Sobrenome:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="last_name" placeholder="Digite o sobrenome" name="last_name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Email: <b>( Login )</b></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="username" placeholder="Digite o email" name="username">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="password">Senha:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pwd" placeholder="Digite a senha" name="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input class="btn btn-lg btn-success btn-block" type="submit" value="Salvar" name="salvar" >
        </div>
      </div>
    </form>
  </div>
</body>
</html>

