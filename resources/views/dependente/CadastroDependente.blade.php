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
     <div class="formulario">
        <form  method="post" action="{{url('dependentes')}}" enctype="multipart/formdata">
        @csrf
     <div class="form-group">
      <label for="nome">Nome: </label>
      <input type="text" class="form-control" placeholder="Digite seu nome" name="name">
    </div>
    <div class="form-group">
            <label for="">Sexo</label>
            <div class="col-md-12 radio">
            <div class="col-md-4">
                <input class="" type="radio" name="sexo" value="M"> Masculino
              </div>
            <div class="col-md-4">
                <input class="" type="radio" name="sexo" value="F"> Feminino
              </div>
            </div>
          </div>
    <div class="form-group">
      <label>Tipo de Distúrbio</label>
      <select class="form-control" name="disturbio_id">
        <option value="" disabled="" selected>Selecione</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="form-group">
      <label>Nascimento: </label>
      <input type="date" class="form-control" name="dt_nascimento"> 
    </div>


    <div class="form-group">
      <label>Observações</label>
      <textarea class="form-control" rows="4" placeholder="Observações..." name="texto_extra"></textarea>
    </div>

    <div class="form-group">
            <div class="">
              <a href="gerenciarDependentes" class="btn">Voltar</a>
            </div>

            <div class="">
              <button type ="submit" class="btn">Cadastrar</button>
            </div>
          </div>
  </div>
</div>
</div>
        </form>

<script src="js/bootstrap.min.js"></script>

</body>
</html>