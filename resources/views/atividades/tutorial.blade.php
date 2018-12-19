<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lectio</title>
		link rel="stylesheet" href="<?php echo asset ('css/bootstrap.min.css')?>">
		<link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>">
		<link rel="icon" href="<?php echo asset ('img/favicon.ico')?>" type="imagem/x-ícone">
	</head>
	<body class="xxx">
		<div class="logo"></div>

		<div class="container">
			<div class="jumbotron-300">
				<h1>Tutorial</h1>
				<h2>Olá {{$dependente->name}}, veja como é fácil brincar com nossos jogos!</h2>
				<p class="text-info recuo">
					Descubra as iniciais:<br>
					Uma palavra sem sua inicial é mostrada, você deve descobrir qual é a inicial usando a figura que aparece ao lado como dica, clique ou toque no botão que tem a letra que você acha ser a primeira letra da palavra apresentada.<br>

					<br>Complete as palavras:<br>
					Uma palavra é aparece sem uma de suas letra, o desafio é descobrir qual letra está faltando, use a imagem que aparece ao lado como dica, clique ou toque no botão que tem a letra que você acha que é a letra que falta na palavra apresentada.<br>

					<br>Com o quê rima?<br>
					Uma palavra é mostrada e o desafio é descobrir com qual das palavras apresentadas abaixo ela rima, clique ou toque no botão que você acredita que  tem a palavra que você acha que rima com a palavra apresentada.

				</p>
			</div><!-- /.jumbotron -->
		</div>
		<br>

		<a href="javascript:history.back()"><button type="button" class="btn btn-secondary">Voltar</button></a>
		<div class="footer-copyright">
            <div class="container-fluid">
     	       © 2018 Sinestesys: <a href=""> Lectio.com </a>
            </div>
        </div>

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>

	</body>
</html>
