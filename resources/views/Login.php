	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Lectio</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="css/favicon.ico" type="imagem/x-ícone">
	</head>
	<body>
		<div class="logo"></div>

		<div class="jumbotron-login">
			<h1>Login</h1>

			<div class="formulario">
				<form action="">
					<div class="form-group">
						<label for="">Acesse o Sistema</label>
						<input type="text" placeholder="E-mail" name="email">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Senha" name="senha">
					</div>
					<div class="form-group">
						<button type="submit" class="btn">Acessar</button>
					</div>
				</form>
			</div>
			<div class="link">
			<a href="{#}" action = "{{ route('novoCadastro') }}">Novo Cadastro</a>
				<a href="password.html">Recuperar Senha</a>
			</div><!-- /.link -->
		</div><!-- /.jumbotron -->
	
	<div class="footer">
  		<p>© Sinestesis 2018</p>
	</div>

	</body>
	</html>
