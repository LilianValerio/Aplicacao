@extends('layouts.app')

@section('content')
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lectio</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" href="img/favicon.ico" type="imagem/x-ícone">
	</head>
	<body>
		<div class="logo"></div>

		<div class="container">
			<div class="jumbotron-login">
			<h1>Login</h1>

			<div class="formulario">
			<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
					<div class="form-group">
						<label for="">Acesse o Sistema</label>
						<input id="email" type="email" placeholder="Digite seu email..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

@if ($errors->has('email'))
	<span class="invalid-feedback" role="alert">
		<strong>{{ $errors->first('email') }}</strong>
	</span>
@endif
					</div>
					<div class="form-group">
					<input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-primary">
                                    Logar
                                </button>
					</div>
				</form>
			</div>
			
			<div class="link">
				<a href="cadastro">Novo Cadastro</a>
				<a href="{{ route('password.request') }}">Recuperar Senha</a>
			</div><!-- /.link -->
		</div><!-- /.jumbotron -->
		</div>
	
	
  <script src="js/bootstrap.min.js"></script>

	</body>
	</html>
	@endsection