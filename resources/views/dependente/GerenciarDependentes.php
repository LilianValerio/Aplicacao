<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Dependentes</title>

 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="icon" href="img/favicon.ico" type="imagem/x-ícone">
</head>
<body>
  <div class="container">

    <div class="logo"></div>

    <div class="jumbotron-table">
      <h1>Dependentes</h1>

<!-- Filtro de exibição e paginação -->
    <div class="ls-custom-select">
      Exibir
      <select name="" id="" class="ls-select">
        <option value="10">10</option>
        <option value="30">30</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
       ítens por página
    </div>
 

        <!-- barra de pesquisa-->
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <form action="">
            <input type="text" class="search form-control" placeholder="O que você está procurando?">
            <button type="submit" class="btn-search"><i class="glyphicon glyphicon-search"></i> Pesquisar</button>
          </form>
        </div>
      </div>
      
      </div>  


        <div class="table-rolagem">
          <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th class="table-old">#</th>
              <th class="table-id">Id</th>
              <th class="table-nome">Nome</th>
              <th class="table-perfil">Perfil</th>
              <th class="table-data">Data do Cadastro</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> <input type="checkbox" class="form-check-input" id="Check1"> </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td> <input type="checkbox" class="form-check-input" id="Check1"> </td>
               <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>  <tr>
              <td> <input type="checkbox" class="form-check-input" id="Check1"> </td>
               <td></td>
              <td> </td>
              <td></td>
              <td></td>
            </tr>  <tr>
              <td> <input type="checkbox" class="form-check-input" id="Check1"> </td>
               <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>  <tr>
              <td> <input type="checkbox" class="form-check-input" id="Check1"> </td>
               <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>


          </tbody>
        </table>
        </div>

       <nav class="pager">
      <a href="#" class="previous"><span aria-hidden="true">&larr;</span> Anterior</a>
      <a href="#" class="next">Próximo <span aria-hidden="true">&rarr;</span></a>
</nav>
    </div>
 
<div class="content-buttons" role="group" aria-label="Basic">
    <button type="button" class="btn btn-secondary">Novo</button>
  <button type="button" class="btn btn-secondary">Editar</button>
  <button type="button" class="btn btn-secondary">Excluir</button>
  <button type="button" class="btn btn-secondary">Voltar</button>
</div>

</div><!-- /.container -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>
