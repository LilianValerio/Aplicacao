<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Lectio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="icon" href="img/favicon.ico" type="imagem/x-ícone">
  </head>
  <body>

    <div class="container">

     <div class="row">
        <div class="col-md-12">
        <nav class="menu">
         <div class="menu-content">
            <div class="nav-1">
            <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
          </div>
          <div class="nav-2">
            <a href="#" class="hidden-xs">Usuário: {{auth()->user()->id}}</a>
            <a href="#"><i class="glyphicon glyphicon-log-out"></i> Sair</a>
          </div>
         </div>
        </nav>
      </div>
     </div>

      <div class="col-md-5 nav-home">
        <a href="gerenciarPacientes" class="btn btn-primary">Gerenciar Paciente</a>
        <a href="gerenciarDependentes" class="btn btn-primary">Gerenciar Dependente</a>
        <a href="gerenciarProfissionais" class="btn btn-primary">Gerenciar Profissional</a>
        <a href="#" class="btn btn-primary">Relatório</a>    
        <a href="exercicio" class="btn btn-primary">Atividades </a>
      </div>
    </div><!-- /.container -->

    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>