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
        <h1>Dados de {{$dependente->name}}</h1>
        <div class="formulario">
            <form  action="{{route('dependentes.update', ['id'=>$dependente->id])}}" method="post" >
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" placeholder="Digite seu nome" name="name" required = "required" value="{{$dependente->name}}">
                </div>
                <div class="form-group">
                <label for="">Sexo</label>
                    <div class="col-md-12 radio">
                        <div class="col-md-4">
                        <input class="" type="radio" name="sexo" value="M" required = "required" {{isset($dependente->sexo) && $dependente->sexo == 'M' ? 'checked' : '' }} > Masculino
                        </div>
                        <div class="col-md-4">
                        <input class="" type="radio" name="sexo" value="F" required = "required" {{isset($dependente->sexo) && $dependente->sexo == 'F' ? 'checked' : '' }} > Feminino
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label>Nascimento: </label>
                  <input type="date" class="form-control" name="dt_nascimento" required = "required" value="{{$dependente->dt_nascimento}}">
                </div>

                <div class="form-group">
                    <label>Tipo de Distúrbio</label>
                    <select class="form-control" name="disturbio_id" required = "required">
                        <option value="1" {{isset($dependente->disturbio_id) && $dependente->disturbio_id == 1 ? 'selected' : '' }}>One</option>
                        <option value="2" {{isset($dependente->disturbio_id) && $dependente->disturbio_id == 2 ? 'selected' : '' }}>Two</option>
                        <option value="3" {{isset($dependente->disturbio_id) && $dependente->disturbio_id == 3 ? 'selected' : '' }}>Three</option>
                    </select>
                </div>

                <div class="form-group">
                  <label>Observações</label>
                  <textarea class="form-control" rows="4" name="texto_extra" required = "required" >{{$dependente->texto_extra}}</textarea>
                </div>

                <div class="form-group">
                        <div class="">
                            <button type ="submit" class="btn btn-secondary">Concluir</button>
                        </div>
                         <div>
                            <a href="{{ route('dependentes.index') }}"><button type="button" class="btn btn-secondary">Voltar</button></a>
                        </div>
                </div>
            </form>
        </div>
    </div>
  </div>


<script src="js/bootstrap.min.js"></script>

</body>
</html>