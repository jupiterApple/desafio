<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Usúarios</h2>
  <form role="form" method="post" id="user_login" action="<?php echo base_url('user/add'); ?>">
		<button><i class="glyphicon glyphicon-plus"></i>Novo</button>
	</form>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td colspan="2">
        <button><i class="glyphicon glyphicon-pencil"></i></button>
        <button><i class="glyphicon glyphicon-remove"></i></button>
	     </td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
