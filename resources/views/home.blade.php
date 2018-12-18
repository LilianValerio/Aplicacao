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
		<div class="jumbotron-x1">
		<h1>{{auth()->user()->name}}</h1>
			<div class="row">
		        <div class="col-md-12">
				    <a href="#" target=""><button class="btn blue-circle-button">Meus Dados<span class="blue-circle-greater-than"></span></button></a>
					<a href="{{ route('dependentes.index') }}"><button class="btn blue-circle-button">Dependentes<span class="blue-circle-greater-than"></span></button></a>
					<a href="{{ route('profissional.index') }}"><button class="btn blue-circle-button">Profissionais<span class="blue-circle-greater-than"></span></button></a>
		        </div>   
			</div>

			<div class="row">
		        <div class="col-md-12">
				    <button class="btn blue-circle-button">Atividades<span class="blue-circle-greater-than"></span></button>
				    <button class="btn blue-circle-button">Relatórios<span class="blue-circle-greater-than"></span></button>
				    <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><button class="btn blue-circle-button">Sair<span class="blue-circle-greater-than"></span></button></a>
		        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>   
			</div>
		</div>
	</div>

	<div class="footer-copyright">
            <div class="container-fluid">
     	       © 2018 Sinestesis: <a href="http://www.sinestesis.com" target="_blank"> sinestesis.com </a>
            </div>
        </div>
				 <script src="js/bootstrap.min.js"></script>

			</body>
			</html>
