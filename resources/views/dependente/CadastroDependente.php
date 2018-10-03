<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lectio</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="img/favicon.ico" type="imagem/x-ícone">
</head>
<body>

  <div class="container">
    <div class="jumbotron">
     <h1>Cadastro de Dependente</h1>
     <div class="form-group">
      <label for="nome">Nome: </label>
      <input type="text" class="form-control" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
      <label>Tipo de Distúrbio</label>
      <select class="form-control">
        <option value="" disabled="" selected>Selecione</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="form-group">
      <label>Nascimento: </label>
      <input type="date" class="form-control"> 
    </div>


    <div class="form-group">
      <label>Observações</label>
      <textarea class="form-control" rows="4" placeholder="Observações..."></textarea>
    </div>

    <div class="form-group">
            <div class="">
              <a href="login.html" class="btn">Voltar</a>
            </div>

            <div class="">
              <button class="btn">Cadastrar</button>
            </div>
          </div>
  </div>
</div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>