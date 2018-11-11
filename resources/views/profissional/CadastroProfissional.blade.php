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
     <h1>Cadastro do Profissional</h1>
     <div class="form-group">
     <form  method="post" action="{{url('profissional')}}" enctype="multipart/formdata">
                @csrf
      <label for="nome">Tipo de Profissional </label>
        <select class="form-control" name="profissao" required = "required">
        <option value="" disabled="" selected>Selecione</option>
        <option value="Pedagogia">Pedagogia</option>
        <option value="Psicologia">Psicologia</option>
        <option value="Psicologia">Neurologista</option>
      </select>
      
    </div>

    <div class="form-group">
      <label>Especialidade</label>
      <input type="text" class="form-control" placeholder="Digite sua Especialidade" name="especialidade" required = "required">
    </div>
    <div class="form-group">
      <label>Início de Atuação</label>
      <input type="date" class="form-control" name="dt_ini_area" required = "required"> 
    </div>


    <div class="form-group">
      <label>Observações</label>
      <textarea class="form-control" rows="4" placeholder="Observações..." name="campo_extra" required = "required"></textarea>
    </div>

    <div class="form-group">
            <div class="">
              <a href="cadastro" class="btn">Voltar</a>
            </div>

            <div class="">
            <button type ="submit" class="btn">Cadastrar</button></a>
            </div>
            </form>
          </div>
  </div>
</div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>