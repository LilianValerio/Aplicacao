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
      @if(session('mensagem'))
          <div class="alert alert-success">
              {{--Mensagem de sucesso--}}
              <p>{{session('mensagem')}}</p>
          </div>
      @endif

    <div class="jumbotron-table">
      <h1> Meus Dependentes</h1>


        <div class="table-rolagem">
          <table class="table table-hover table-responsive">

              <thead>
              <tr>
                <th class="table-old"><span class="glyphicon glyphicon-asterisk"> </span></th>
                <th class="table-nome">Nome</th>
                <th class="table-perfil">Data nasc</th>
                <th class="table-data">Sexo</th>
                  <th class="table-data">Obs.</th>
                <th class="table-old-2">Editar</th>
                <th class="table-old-2">Deletar</th>
              </tr>
              </thead>
              <tbody>
                @foreach($dependente as $dependente_)

                  <tr>
                    <th class="table-old"><span class="glyphicon glyphicon-asterisk"> </span></th>
                    <td>{{$dependente_['name']}}</td>
                    <td>{{$dependente_['dt_nascimento']}}</td>
                    <td>{{$sexo = $dependente_['sexo']== 'M' ?  'Masculino' : 'Feminino'}}</td>
                      <td>{{$dependente_['texto_extra']}}</td>
                    {{--<td>{{$dependente_['name']}}</td>--}}
                      <th><a href="{{ route('dependentes.edit', ['id'=>$dependente_->id]) }}"><button class="checkthis" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></th>

                     <td>

                        <form action="/dependentes/{{ $dependente_->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="checkthis" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button>
                        </form>

                     </td>
                  </tr>
                @endforeach

              </tbody>
        </table>
        </div>

     </div>
 
<div class="content-buttons" role="group" aria-label="Basic">
    <a href = "cadastrodependente" ><button type="button" class="btn btn-secondary">Novo</button></a>
  <a href="{{ route('home') }}"><button type="button" class="btn btn-secondary">Voltar</button></a>
</div>

</div><!-- /.container -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>
