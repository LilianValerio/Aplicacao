<!DOCTYPE html>
  <html lang="pt-br">
  <head>
  	<meta charset="utf-8"/>
  	<title>Cadastro Sinestesi</title>
  	<link rel="stylesheet" type="text/css" href="css/style.css"/>
  	<body>
      <div class="content-form">
       <div class="jumbotron">
        <h1>Cadastro de usuário</h1>
        <div class="formulario"
        <form name="signup" method="post" action="cadastrando.php">
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" placeholder="Nome">  
          </div>
          <div class="form-group">
            <label for="">Sobrenome</label>
            <input type="text" placeholder="Sobrenome">  
          </div>
          <div class="form-group">
            <label for="">Sexo</label>
            <div class="radio">
              <input type="radio" name="sexo" value="masculino"> Masculino
              <input type="radio" name="sexo" value="feminino"> Feminino
            </div>
          </div>
          <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" placeholder="E-mail">  
          </div>

          <div class="col-50">
            <div class="form-group">
              <label for="">Senha</label>
              <input type="text" placeholder="Senha">  
            </div>
          </div>
          <div class="col-50-2">
            <div class="form-group">
              <label for="">Telefone</label>
              <input type="text" placeholder="Telefone">  
            </div>
          </div>

          <div class="col-70">
            <div class="form-group">
              <label for="">Cidade</label>
              <input type="text" placeholder="Cidade">  
            </div>
          </div>
          <div class="col-30">

            <div class="form-group">
              <label for="">Estado</label>
              <select name="estado" id="estado">
                <option value="">--</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="DF">DF</option>
                <option value="GO">GO</option>
                <option value="MG">MG</option>
              </select> 
            </div>
          </div>
          <div class="form-group">
            <div class="col-50">
              <button class="btn">Cadastrar</button>
            </div>  

            <div class="col-50-2">
              <a href="login.html" class="btn">Voltar</a>
            </div>
          </div>
        </form>
      </div><!-- /.formluario -->
    </div><!-- /.jumbotron -->
  </div><!-- /.content-form -->
</body>
</html>