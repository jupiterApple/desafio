<!DOCTYPE html>
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
</html>
