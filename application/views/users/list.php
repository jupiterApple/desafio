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
  <h2>Listar Usuários</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">Firstname</th>
        <th class="text-center">Lastname</th>
        <th class="text-center">Email</th>
        <th class="text-center" colspan="2">Ações</th>
      </tr>
    </thead>
    <tbody>
 	<?php if(!empty($users)){
		foreach($users as $i => $user){ ?>
      <tr data-id="">
        <td><?php echo $user['first_name']; ?></td>
        <td><?php echo $user['last_name']; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td class="text-center"><a><span data-id="<?php echo $user['id']; ?>" class="glyphicon glyphicon-pencil"></span></a></td>
        <td class="text-center"><a><span data-id="<?php echo $user['id']; ?>" class="glyphicon glyphicon-remove"></span></a></td>
      </tr>
	   <?php };
	  }else{ ?>
		<tr>
			<td colspan="5">Nenhum Registro encontrado.</td>
		</tr>
	  <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
<script>
	 $(document).ready(function(){
		$('.glyphicon-remove').on('click', function(){
			var id = $(this).data("id");

			$.ajax({
				url: '<?= base_url(); ?>' + '/user/remove',
				type: 'POST',
				dataType: 'json',
				data: {
					id: id
				},
				success: function(msg){

				}
		});
	});

		$('.glyphicon-pencil').on('click', function(){
			var id = $(this).data("id");

			window.location = '<?= base_url(); ?>' + 'user/add/'+id;
	});
});
</script>
