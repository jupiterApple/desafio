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
  <h2>Listar Salas</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="10%" class="text-center">#</th>
        <th class="text-center">Nome</th>
        <th width="20%" class="text-center">Status</th>
        <th width="10%" class="text-center" colspan="3">Ações</th>
      </tr>
    </thead>
    <tbody>
 	<?php if(!empty($classrooms)){
		foreach($classrooms as $i => $classroom){ ?>
      <tr>
        <td class="text-center"><?php echo $classroom['id']; ?></td>
        <td><?php echo $classroom['name']; ?></td>
        <td class="text-center">
        <?php if($classroom['reserved'] == 0){
          echo 'Dísponivel';
        }else{
          echo 'Reservado';
        }
        ?>
        </td>
        <td class="text-center"><a><span data-id="<?php echo $classroom['id']; ?>" class="glyphicon glyphicon-pencil"></span></a></td>
        <td class="text-center"><a><span data-id="<?php echo $classroom['id']; ?>" class="glyphicon glyphicon-remove"></span></a></td>
        <td class="text-center"><a><span data-id="<?php echo $classroom['id']; ?>" data-name="<?php echo $classroom['name']; ?>" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-list-alt"></span></a></td>
      </tr>
	   <?php };
	  }else{ ?>
		<tr>
			<td colspan="3">Nenhum Registro encontrado.</td>
		</tr>
	  <?php } ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <form class="form-horizontal" method="post" action="<?php echo base_url('classroomReservation/register'); ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reserva da Sala <span id="nome_turma"></span></h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
          <input type="hidden" name="id" id="id_turma" value=""/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>
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

			window.location = '<?= base_url(); ?>' + 'classroom/add/'+id;
	});

    $('.glyphicon-list-alt').on('click', function(){
      var id = $(this).data("id");
      var name = $(this).data("name");

      $(".modal-body #id_turma").val(name);
      $(".modal-title #nome_turma").text(name);
  });
});
</script>
