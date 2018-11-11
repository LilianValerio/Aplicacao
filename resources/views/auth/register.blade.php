 @extends('layouts.app')
@section('content')
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
  	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Sinestesi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="icon" href="img/favicon.ico" type="imagem/x-ícone" >
    <body>

      <div class="content-form">
       <div class="jumbotron">
        <h1>Cadastro de usuário</h1>
        <div class="formulario">
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
          @csrf
          <div class="form-group">
            <label for="">Nome</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          </div>

          <div class="form-group">
                <label for="">Sou profissional?</label>
                    <div class="col-md-12 radio">
                        <div class="col-md-4">
                        <input class="" type="radio" name="perfil" value="P" required = "required" > Sim
                        </div>
                        <div class="col-md-4">
                        <input class="" type="radio" name="perfil" value="U" required = "required"> Não
                        </div>
                    </div>
                </div>
          
          <div class="form-group">
            <label for="">E-mail</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Senha</label>
                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                                @endif  
              </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
            <label for="">Confirmar senha</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>           
          </div>
          

          
          <div class="form-group">
            <div class="">
              <a href="index" class="btn">Voltar</a>
            </div>
            <div class="">
              <button type ="submit" class="btn">Cadastrar</button>
            </div>
          </div>
        </form>
      </div><!-- /.formluario -->
    </div><!-- /.jumbotron -->
  </div><!-- /.content-form -->

  <script src="js/bootstrap.min.js"></script>
</body>
</html>
@endsection