<?php
$user_id=$this->session->userdata('id');

if(!$user_id){

	redirect('user/login_view');
}

 ?>
 <style>

 	body,html{
    height: 100%;
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  .main{
    padding: 10px 10px 0 10px;
  }

 @media (min-width: 765px) {

    .main{
      position: absolute;
      width: calc(100% - 40px);
      margin-left: 40px;
      float: right;
    }

    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }

    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    nav.sidebar a{
      padding-right: 13px;
    }

    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    nav.sidebar{
      width: 200px;
      height: 100%;
      margin-left: -160px;
      float: left;
      margin-bottom: 0px;
    }

    nav.sidebar li {
      width: 100%;
    }

    nav.sidebar:hover{
      margin-left: 0px;
    }

    .forAnimate{
      opacity: 0;
    }
  }

  @media (min-width: 1330px) {

    .main{
      width: calc(100% - 200px);
      margin-left: 200px;
    }

    nav.sidebar{
      margin-left: 0px;
      float: left;
    }

    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }


 </style>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>User Profile Dashboard-CodeIgniter Login Registration</title>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

		<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->


	</head>
	<head>
      <meta charset="utf-8">
      <link href="<?php echo base_url('application/bootstrap/css/bootstrap/bootstrap_3.3.1.min.css');?>" rel="stylesheet">
      <link href="<?php echo base_url('application/bootstrap/css/bootstrap/bootstrap.min.css');?>" rel="stylesheet">
       <title>R2CODE</title>
   </head>
	<body>

<!-- <div class="container">
	<div class="row">
		<div class="col-md-4">
			<table class="table table-bordered table-striped">
				<tr>
					<th colspan="2"><h4 class="text-center">User Info</h3></th>
				</tr>
					<tr>
						<td>UserName</td>
						<td><?php echo $this->session->userdata('username'); ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $this->session->userdata('email');  ?></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><?php echo $this->session->userdata('first_name');  ?></td>
					</tr>
			</table>
		</div>
	</div>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="control-group">
		  <button class="btn btn-default dropdown-toggle" type="button">
		    Usúarios
		  </button>
		</div>
	</div>
</div> -->
<div class="panel panel-default">
  <div class="panel-body">
  	<div class="row">
  		<div class="btn-group" role="group" aria-label="...">
	  		<form role="form" method="post" id="user_login" action="<?php echo base_url('user/list'); ?>">
			   <button type="submit" class="btn btn-default">Usuários</button>
			</form>
		</div>
  	</div>
  	<br>
  	<div class="row">
  		<div class="btn-group" role="group" aria-label="...">
	  <button type="button" class="btn btn-default">Salas</button>
	</div>
  	</div>
  </div>
</div>
	</body>
</html>



