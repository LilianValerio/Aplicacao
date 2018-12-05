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
		<h1>Profissional-{{auth()->user()->name}}</h1>
			<div class="row">
		        <div class="col-md-12">
				    <a href="#" target=""><button class="btn blue-circle-button">Meus Dados<span class="blue-circle-greater-than"></span></button></a>
					<a href="{{ route('associar.index') }}"><button class="btn blue-circle-button">Pacientes<span class="blue-circle-greater-than"></span></button></a>
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
     	       © 2018 Sinestesys: <a href=""> Lectio.com </a>
            </div>
        </div>
				 <script src="js/bootstrap.min.js"></script>

			</body>
			</html>
