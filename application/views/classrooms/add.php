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
    <h2>Cadastrar Sala</h2>
    <?php
            $success_msg= $this->session->flashdata('success_msg');
            $error_msg= $this->session->flashdata('error_msg');

            if($success_msg){
         ?>
               <span class="alert alert-success">
                  <?php echo $success_msg; ?>
               </span>
         <?php
            }
            if($error_msg){
         ?>
               <span class="alert alert-danger">
                  <?php echo $error_msg; ?>
               </span>
         <?php
            }
         ?>
    <form class="form-horizontal" method="post" action="<?php echo base_url('classroom/register'); ?>">
      <div class="form-group">
        <label class="control-label col-sm-2" for="nome">Nome:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="<?php echo $classroom->name ?>" required placeholder="Digite o nome da sala" name="name">
        </div>
      </div>
      <div class="form-group col-sm-4 pull-right">
        <div class="col-sm-offset-2 col-sm-10">
          <input name="id" type="hidden" value="<?php echo $classroom->id; ?>">
          <input class="btn btn-lg btn-success btn-block" type="submit" value="Salvar" name="salvar" >
        </div>
      </div>
    </form>
  </div>
</body>
</html>

