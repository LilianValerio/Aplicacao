<!DOCTYPE html>
			<html lang="pt-br">
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Lectio</title>
				<link rel="stylesheet" href="<?php echo asset ('css/bootstrap.min.css')?>">
				<link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>">
				<link rel="icon" href="<?php echo asset ('img/favicon.ico')?>" type="imagem/x-ícone">
			</head>
			<body>

	<div class="container">
		<div class="jumbotron-x1">
		<h1>Olá {{$dependente->name}}, vamos brincar?</h1>
			<div class="row">
		        <div class="col-md-12">
				    <a href="{{ route('dep_atividades', ['id'=>$dependente->id, 'id_atvd'=>1]) }}"><button class="btn blue-circle-button">Descubra <br> as iniciais<span class="blue-circle-greater-than"></span></button></a>
					<a href="{{ route('dep_atividades', ['id'=>$dependente->id, 'id_atvd'=>2]) }}"><button class="btn blue-circle-button">Complete <br> as palavras<span class="blue-circle-greater-than"></span></button></a>
					<a href="{{ route('dep_atividades', ['id'=>$dependente->id, 'id_atvd'=>3]) }}"><button class="btn blue-circle-button">Com o quê <br> rima?<span class="blue-circle-greater-than"></span></button></a>
		        </div>   
			</div>

			<div class="row">
		        <div class="col-md-12">
					<a href="{{ route('tutorial', ['id'=>$dependente->id])}}"><button class="btn blue-circle-button">Tutorial<span class="blue-circle-greater-than"></span></button></a>
					<a href="{{ route('dependentes.index')}}"><button class="btn blue-circle-button">Voltar<span class="blue-circle-greater-than"></span></button></a>
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
