<html>
<head>
    <title>Lectio</title>
 
    <link rel="stylesheet" href="<?php echo asset('css/estilodoformulario.css')?>" type="text/css">
</head>
<body>
<meta charset="utf-8"/>
	<title>Login</title>
			<fieldset id="teladelogin">
        		<div class="campo">
                  <label for="email">E-mail</label>
                  <input type="text" id="email" name="email" style="width: 20em" value="" placeholder="exemplo@dominion.com">
              </div>
              <div class="campo">
                  <label for="senha">Senha</label>
                  <input type="password" id="senha" name="senha" style="width: 20em" value="">
              </div>
              <div class="campo">
        			<button type="submit" name="Login">Logar</button>
              <button type="submit" name="NovoCadastro">Novo Cadastro</button>
              </div>
    		</fieldset>
</body>
</html>