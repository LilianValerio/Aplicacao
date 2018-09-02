<!DOCTYPE html>
  <html lang="pt-br">
  <head>
  	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Cadastro Sinestesi</title>
  	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="icon" href="css/favicon.ico" type="imagem/x-ícone" >
  	<body>

      <div class="content-form">
       <div class="jumbotron">
        <h1>Cadastro de usuário</h1>
        <div class="formulario"
        <form name="signup" method="post" action="cadastrando.php">
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" placeholder="Nome" name="nome">  
          </div>
          <div class="form-group">
            <label for="">Sobrenome</label>
            <input type="text" placeholder="Sobrenome" name="sobre_nome">  
          </div>
          <div class="form-group">
            <label for="">Sexo</label>
            <div class="radio">
              <input type="radio" name="sexo" value="masculino"> Masculino
              <input type="radio" name="sexo" value="feminino"> Feminino
              <input type="radio" name="sexo" value="outros"> Outros
            </div>
          </div>
          <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" placeholder="E-mail" name="email">  
          </div>

          <div class="col-50">
            <div class="form-group">
              <label for="">Senha</label>
              <input type="text" placeholder="Senha" name="senha">  
            </div>
          </div>
          <div class="col-50-2">
            <div class="form-group">
              <label for="">Telefone</label>
              <input type="text" placeholder="Telefone" name="fone">  
            </div>
          </div>

          <div class="col-30">
            <div class="form-group">
              <label for="">Estado</label>
              <select name="estado" id="estado">
                <option value="">--</option>
                <option value="AC">AC</option> 
                <option value="AL">AL</option> 
                <option value="AM">AM</option> 
                <option value="AP">AP</option> 
                <option value="BA">BA</option> 
                <option value="CE">CE</option> 
                <option value="DF">DF</option> 
                <option value="ES">ES</option> 
                <option value="GO">GO</option> 
                <option value="MA">MA</option> 
                <option value="MT">MT</option> 
                <option value="MS">MS</option> 
                <option value="MG">MG</option> 
                <option value="PA">PA</option> 
                <option value="PB">PB</option> 
                <option value="PR">PR</option> 
                <option value="PE">PE</option> 
                <option value="PI">PI</option> 
                <option value="RJ">RJ</option> 
                <option value="RN">RN</option> 
                <option value="RO">RO</option> 
                <option value="RS">RS</option> 
                <option value="RR">RR</option> 
                <option value="SC">SC</option> 
                <option value="SE">SE</option> 
                <option value="SP">SP</option> 
                <option value="TO">TO</option> 
              </select> 
            </div>
          </div>

          <div class="col-70">
            <div class="form-group">
              <label for="">Cidade</label>
              <input type="text" placeholder="Cidade" name="cidade">  
            </div>
          </div>

          <div class="col-40">
            <div class="form-group">
              <label for="">Tipo de Usuário</label>
              <select name="usuario" id="usuario">
                <option value="">--</option>
                <option value="">Paciente</option>
                <option value="">Profissional</option> 
              </select>  
            </div>
          </div>
           
          <div class="form-group">
            <div class="col-50">
              <a href="login.html" class="btn">Voltar</a>
            </div>

            <div class="col-50-2">
              <button class="btn">Cadastrar</button>
            </div>
          </div>
        </form>
      </div><!-- /.formluario -->
    </div><!-- /.jumbotron -->
  </div><!-- /.content-form -->
</body>
</html>