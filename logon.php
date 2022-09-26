<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Faça o login</title>
</head>
<body>
    

<?php
	
	include 'connection.php';	
	include 'nav.php';
	include 'cabecalho.php';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Logon de Usuário</h2>
				<form name="frmusuario" method="post" action="valid.php">
					<div class="form-group">
						<label for="email">Email</label>
						<input name="txtemail" type="email" class="form-control" required id="email" autocomplete="off">
					</div>

					<div class="form-group">
						<label for="senha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha" autocomplete="off">
					</div>

					<button type="submit" class="btn btn-lg btn-default">
					    <span class="glyphicon glyphicon-ok"> Entrar</span>
					</button>

					<button type="submit" class="btn btn-lg btn-link">

						Ainda não sou cadastrado

					</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>